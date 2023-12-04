<?php

namespace App\Modules\System;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends SystemController
{
    public function index(Request $request){
        if(isset($request->page)){
            $this->viewData['notifications'] = Auth::user()->notifications()->orderBy('created_at','DESC')->paginate(10);
            return ['content'=>$this->view('global.notification-view',$this->viewData)->render(),'next'=> $this->viewData['notifications']->nextPageUrl()];
        }else{
            $this->viewData['breadcrumb'][] = [
                'text'=> __('Notifications'),
            ];

            $this->viewData['pageTitle'] = __('Notifications');

            return $this->view('global.notification',$this->viewData);
        }
    }


    public function url($ID){
        $notifications = Auth::user()->notifications()->where('id',$ID)->first();
        if($notifications){
            if($notifications->read_at == null){
                $notifications->markAsRead();
            }
            return redirect($notifications->data['url']);
        }else{
            return back();
        }
    }



}
