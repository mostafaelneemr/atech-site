<?php

namespace App\Modules\System;

use App\Models\Setting;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;


class SettingController extends SystemController
{

    public function __construct(){
        parent::__construct();
        $this->viewData['breadcrumb'] = [
            [
                'text'=> __('Home'),
                'url'=> url('system'),
            ]
        ];
    }

    public function index(){
        $this->viewData['pageTitle'] = __('Setting');

        $settingGroups = Setting::select('group_name')
            ->groupBy('group_name')
            ->where('is_visible','yes')
            ->where('group_name','!=','staff_app')
            ->get();
        $setting = [];
        foreach ($settingGroups as $key => $value) {
            $setting[] = Setting::where('group_name',$value->group_name)->where('is_visible','yes')->orderBy('sort','ASC')->get();
        }


        $this->viewData['settingGroups'] = $settingGroups;
        $this->viewData['setting'] = $setting;

        return $this->view('setting.index',$this->viewData);
    }

    public function update(Request $request){
        $data = $request->all();

        $settingTable = Setting::get(['name','input_type']);
        foreach ($settingTable as $key => $value){

            switch ($value->input_type){
                case 'image':
                    $validator = Validator::make($request->all(), [
                        $value->name => 'nullable|image',
                    ]);
                    if (!$validator->fails() && $request->file($value->name)) {
                        // $path = $request->file($value->name)->store(setting('system_path').'/setting/'.date('Y/m/d'),'first_public');
                        
                        if($request->file('site_logo')){
                            $path = $request->file('site_logo');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->resize(230, 70)->save('upload/setting/' . $name_gen);
                            $save_url = 'upload/setting/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }elseif($request->file('admin_logo')){
                            $path = $request->file('admin_logo');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->resize(230, 70)->save('upload/setting/' . $name_gen);
                            $save_url = 'upload/setting/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }elseif($request->file('video_image')){
                            $path = $request->file('video_image');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->resize(623, 384)->save('upload/setting/' . $name_gen);
                            $save_url = 'upload/setting/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }elseif($request->file('image_about_section')){
                            $path = $request->file('image_about_section');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->resize(960, 765)->save('upload/setting/' . $name_gen);
                            $save_url = 'upload/setting/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }
                    }
                    break;

                default:
                    if(isset($data[$value->name])){
                        $valueToUpdate = $data[$value->name];
                        if(is_array($valueToUpdate)){
                            $valueToUpdate = @serialize($valueToUpdate);
                        }
                        Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$valueToUpdate]);
                    }else{
                        Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>'']);
                    }
                    break;
            }

        }
        return back()
            ->with('status','success')
            ->with('msg',__('Settings edited successfully'));
    }


}
