<?php

namespace App\Modules\System;

use App\Http\Requests\ImageFormRequest;
use App\Models\admin\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class ClientController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Client::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $imagePath = asset($data->image); 
                    return '<img src="' . $imagePath . '" alt="Slider Image" width="100" height="100">'; 
                })
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteClient(\'' . route( 'clients.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Client');
        }else{
            $this->viewData['pageTitle'] = __('Clients');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Client') ];
    
        return $this->view('clients.index', $this->viewData);
    }

    public function store(ImageFormRequest $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(110, 110)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;
        $insertData = Client::create(['image' => $save_url]);
        
        if($insertData){
            return $this->response(
                true,
                200,
                __('Data added successfully'),
                [
                    'url'=> route('clients.index')
                ]
            );
        }else{
            return $this->response(
                false,
                11001,
                __('Sorry, we could not add the data')
            );
        }
        return redirect::back();

    }

    public function destroy($id)
    {
        $testimonial = Client::findOrFail($id);
        $image = Str::after($testimonial->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);
        unlink($image);
        $testimonial->delete();

        $message = __( 'Client deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveTestimonial($id)
    {
        Client::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Client is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveTestimonial($id)
    {
        Client::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Client is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
