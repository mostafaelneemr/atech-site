<?php

namespace App\Modules\Api;

use App\Http\Controllers\Controller;

use App\Models\Image;
use App\Models\User;

use App\Modules\Api\Transformers\UserTransformer;
use App\Modules\Api\Transformers\HomeTransformer;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserApiController extends ApiController
{

    public function __construct()
    {
        $this->middleware(['auth:api'])->except([
            'login', 'register', 'forgot_password','resend_forgot_code', 'resend_activation_code', 'verify_account','reset_password'
        ]);
    }

    public function register(Request $request)
    {

        $input = $request->all();
        $data = [
            'type' => 'required|in:person,company',
            'name' => 'required|string',
            'mobile' => 'required|unique:users,mobile',
            'password' => 'required|confirmed|min:6',
        ];
        if(isset($input['type']) && $input['type'] == 'company'){
            $data['email'] = 'required|email|unique:users';
           // $data['rc_copy '] = 'required|image|mimes:jpeg,jpg,png|max:10000';
        }
        $validator = Validator::make($input, $data);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }
        if($input['type'] == 'person'){
            $input['username'] = $input['mobile'];
        }else{
            if(!$request->file('rc_copy')){
                return $this->fail(__('rc_copy is required'));
            }
        }

        $activation_code = rand(1000, 9999);;
        $input['password'] = bcrypt($input['password']);
        unset($input['password_confirmation']);
        $input['activation_code'] = $activation_code;


        if($request->file('rc_copy')){
            $path = $request->file('rc_copy')->store(date('Y/m/d'),'first_public');
            if($path){
                $input['rc_copy'] = $path;
            }
        }
        $input['status'] = 'new';
        $user = User::create($input);
        if ($user) {
            $sms_content = __('Activation code is ' . $activation_code);
            send_sms($user->mobile, $sms_content);
            return $this->success(__('Your account is created successfully, Please verify your mobile number by type code that send to you via sms ' . $sms_content));
        } else {
            return $this->fail(__('Please try again later'));
        }
    }


    function resend_activation_code(Request $request)
    {
        $input = $request->only('mobile');
        $validator = Validator::make($input, [
            'mobile' => 'required|exists:users,mobile',
        ]);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }


        $user = User::select('activation_code','mobile')->where('mobile',$input['mobile'])->first();

        $sms_content = __('Activation code is ' . $user->activation_code);
         if (send_sms($user->mobile, $sms_content)) {
            return $this->success(__('activation code resent successfully ' . $sms_content));
        } else {
            return $this->fail(__('Can not send code, please try again later'));
        }

    }


    function verify_account(Request $request)
    {
        $input = $request->only('mobile', 'code');
        $validator = Validator::make($input, [
            'mobile' => 'required|exists:users,mobile',
            'code' => 'required|exists:users,activation_code',
        ]);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $user = User::where('mobile',$input['mobile'])->first();
        if (!empty($user->verified_at)) {
            return $this->fail(__('Account Already verified'));
        }
        if ($user->activation_code == $input['code']) {
            if($user->type == 'person'){
                $user->update(['verified_at' => date('Y-m-d H:i:s'),'status'=>'active']);
            }else{
                $user->update(['verified_at' => date('Y-m-d H:i:s')]);
            }
            return $this->success(__('Account is active now, please try to login'));
        } else {
            return $this->fail(__('Invalid activation code'));
        }
    }


    public function login(Request $request)
    {

        $input = $request->only(['username', 'password']);
        $validator = Validator::make($input, [
            'username' => 'required|exists:users,mobile',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }


           $login = Auth('api')->attempt(['username' => $input['username'], 'password' => $input['password']]);


            if ($login['status']) {

                $user = User::select('name','email','mobile','lat','lng','address','credit','verified_at')->find( Auth('api')->id());

                if($user->verified_at == null){
                    return response()->json([
                        'status' => false,
                        'msg' => __('Account not verified yet'),
                        'code' => 308,
                        'data'=>false
                    ],200);
                }
                $data['user'] = $user;
                $data['token'] = $login['token'];
                return $this->success(__('Successfully logged in'), $data);
            }
         return $this->fail(__('Wrong username OR password'));


    }

    public function actualLogin($username, $password)
{
    if (Auth('api')->attempt(['username' => $username, 'password' => $password, 'status' => 'active'])) {
        return true;
    } else {
        return false;
    }
}

    public function GenerateToken($username, $password)
    {
        $http = new \GuzzleHttp\Client;

        try {

            $response = $http->post(getenv('APP_URL') . 'public/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'brfIOS9vCUw2HuLOvLdyrjh9iA3gtxPV2xWVvw9w',
                    'username' => $username,
                    'password' => $password,
                    'scope' => '',
                ],
            ]);
            return ['status' => true, 'data' => json_decode((string)$response->getBody())];
        } catch (RequestException $e) {

            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function forgot_password(Request $request)
    {
        $input = $request->only(['mobile']);
        $validator = Validator::make($input, [
            'mobile' => 'required|exists:users,mobile'
        ]);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $user = User::where('mobile', $input['mobile'])->first();
        if($user->status != 'active'){
            return $this->fail(__('Your account is not active, please contact the support'));
        }
        $forgot_code = rand(1000, 9999);;
        $user->update(['forgot_password_code' => $forgot_code]);
        $sms_content = __('Code is ' . $forgot_code);
        if (send_sms($user->mobile, $sms_content)) {
            return $this->success(__('Forgot code sent successfully ' . $sms_content));
        } else {
            return $this->fail(__('Can not send code, please try again later'));
        }
    }

    public function reset_password(Request $request)
    {
        $input = $request->only(['mobile', 'code', 'password', 'password_confirmation']);
        $validator = Validator::make($input, [
            'mobile' => 'required|exists:users,mobile',
            'code' => 'required|exists:users,forgot_password_code',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $user = User::where(['mobile' => $input['mobile'], 'forgot_password_code' => $input['code']])->first();
        if (!$user) {
            return $this->fail('Invalid code');
        }

        if ($user->update(['forgot_password_code' => '', 'password' => bcrypt($input['password'])])) {
            return $this->success(__('Password updated'));
        } else {
            return $this->fail('Cannot update password, please try again later');
        }


    }


    public function resend_forgot_code(Request $request)
    {
        $input = $request->only('mobile');
        $validator = Validator::make($input, [
            'mobile' => 'required|exists:users,mobile',
        ]);

        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $user = User::select('forgot_password_code','mobile')->where('mobile', $input['mobile'])->first();
        $sms_content = __('Code is ' . $user->forgot_password_code);
        if (send_sms($user->mobile, $sms_content)) {
            return $this->success(__('Code resent successfully ' . $sms_content));
        } else {
            return $this->fail(__('Can not send code, please try again later'));
        }

    }

    public function profile()
    {



        $auth = Auth::user();

        $data['user'] = [
            'type' => $auth['type'],
            'name' => $auth['name'],
            'email' => $auth['email'],
            'mobile' => $auth['mobile'],
            'address' => $auth['address'],
            'lat' => $auth['lat'],
            'lng' => $auth['lng'],
        ];

        return $this->success('Done', $data);
    }

    public function logout()
    {
        if (Auth::check()) {
            if(Auth::user()->AauthAcessToken()->delete()){
                return $this->success(__('Logged out'));
            }else{
                return $this->fail(__('please try again later'));
            }
        }
    }









}
