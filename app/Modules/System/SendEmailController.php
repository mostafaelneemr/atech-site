<?php

namespace App\Modules\System;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\admin\Contact;
use App\Models\User;
use App\Notifications\General;
use Carbon\Carbon;
use Carbon\CarbonInterval;

use Illuminate\Support\Facades\Notification;

class SendEmailController extends SystemController
{
    public function index(Request $request)
    {
        try {
            
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'email|required|string',
                'phone' => 'required|min:11|numeric',
                'message' => 'string'
            ]);
            $data = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
            Mail::to('mostafa.elnemr50@gmail.com')->send(new ContactMail($data));

            session()->flash('status', 'thank you for contact');
            return redirect()->back();
        
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage() ]);
        }
    }


    public function adminindex(Request $request)
    {
        if ($request->datatable) {
            $data = Contact::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($data) {
                    $now = Carbon::now();
                    $created_at = Carbon::parse($data->created_at);

                    $diff = $created_at->diff($now);
                    if ($diff->i < 1) {
                        return "1 minute ago";
                    } else {
                        $interval = CarbonInterval::year($diff->y)->months($diff->m)->days($diff->d)->hours($diff->h)->minutes($diff->i);
                
                        return $interval->forHumans();
                    }
                })
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteMessage(\'' . route( 'deletemessage', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['created_at' ,'action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Message');
        }else{
            $this->viewData['pageTitle'] = __('Message');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Messages') ];
            
        return $this->view('emails.index', $this->viewData);
    }

    public function deletemessage($id)
    {
        if(Contact::find($id)->delete()){

            $response = [
                "status" => true,
                "message" => "Message deleted successfully.",
                "id"=>$id
            ];
        }else{

        $response = [
            "status" => false,
            "message" => "Message Can\'t deleted successfully."
        ];

        }

        return response()->json($response);
    }
}