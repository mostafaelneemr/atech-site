<?php

namespace App\Modules\System;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends SystemController{

    public function index(Request $request){

        switch ($request->type) {

            case 'readNotification':
                foreach (Auth::user()->unreadNotifications as $notification) {
                    $notification->markAsRead();
                }
                break;

            case 'make_as_read':

                \Illuminate\Support\Facades\Auth::user()->notifications()->update(['read_at'=>date('Y-m-d H:i:s')]);
                return ['status'=>true];
                break;

            case 'check_notify' :
                $notify_count = \Illuminate\Support\Facades\Auth::user()->unreadNotifications()->count();
                $notify = \Illuminate\Support\Facades\Auth::user()->notifications()->select('id','data','read_at','created_at')->orderby('created_at','desc')->limit(50)->get();

                return ['status'=>true,'number'=>$notify_count,'notify'=>$notify];

                break;
        }

    }

}
