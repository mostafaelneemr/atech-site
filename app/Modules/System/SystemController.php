<?php

namespace App\Modules\System;

use App\Http\Controllers\Controller;

use App\Models\Driver;
use App\Models\Order;
use App\Models\User;
use Datatables;
use App\Notifications\General;

class SystemController extends Controller{

    protected $viewData = [
        'breadcrumb'=> []
    ];

    public function __construct(){

        $this->middleware(['auth:staff']);

    }

    protected function view($file,array $data = []){
        return view('system.'.$file,$data);
    }

    protected function response($status,$code = '200',$message = 'Done',$data = []): array {
        return [
            'status'=> $status,
            'code'=> $code,
            'message'=> $message,
            'data'=> $data
        ];
    }

    public function dashboard(\Illuminate\Http\Request $request){

        $this->viewData['breadcrumb'][] = [
            'text'=> __('Dashboard')
        ];

        $this->viewData['pageTitle'] = __('Dashboard');

//
//        $this->viewData['drivers'] = Driver::where('status','active')->count();
//        $this->viewData['in_active_drivers'] = Driver::where('status','inactive')->count();
//        $this->viewData['availabel_drivers'] = Driver::where('available','yes')->count();
//        $this->viewData['unavailabel_drivers'] = Driver::where('available','no')->count();
//        $this->viewData['driver_requests'] = Driver::where('status','new')->count();
//        $this->viewData['vendors'] = User::where('status','active')->where('type','company')->count();
//        $this->viewData['in_active_vendors'] = User::where('status','inactive')->where('type','company')->count();
//        $this->viewData['vendor_requests'] = User::where('status','new')->where('type','company')->count();
//        $this->viewData['users'] = User::where('status','active')->where('type','person')->count();
//        $this->viewData['users_not_verify'] = User::where('status','new')->where('type','person')->count();
//        $this->viewData['new_orders'] = Order::where('status','new')->count();
//        $this->viewData['assigned_orders'] = Order::where('status','assigned')->count();
//        $this->viewData['accepted_orders'] = Order::where('status','accepted')->count();
//        $this->viewData['collected_orders'] = Order::where('status','collected')->count();
//        $this->viewData['delivered_orders'] = Order::where('status','delivered')->count();
//        $this->viewData['returned_orders'] = Order::where('status','returned')->count();
//        $this->viewData['cancel_orders'] = Order::where('status','cancel')->count();
         return $this->view('dashboard',$this->viewData);
    }


}
