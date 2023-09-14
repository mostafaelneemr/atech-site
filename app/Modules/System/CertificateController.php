<?php

namespace App\Modules\System;

use App\Http\Requests\ImageFormRequest;
use App\Models\admin\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class CertificateController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Certificate::all();
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
                            <div class="dropdown-menu '.( (\App::getLocale() == 'ar') ? 'dropdown-menu-left' : 'dropdown-menu-right').'" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteCertificate(\'' . route( 'certificates.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Certificate');
        }else{
            $this->viewData['pageTitle'] = __('Certificates');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Certificate') ];
    
        return $this->view('certificate.index', $this->viewData);
    }

    public function create()
    {
        // 
    }


    public function store(ImageFormRequest $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(481, 325)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;
        Certificate::create(['image' => $save_url]);

        $notification = array(
            'message' => 'Certificate Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('certificates.index')->with($notification);
    }


    public function show($id)
    {
        return back();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $testimonial = Certificate::findOrFail($id);
        $image = Str::after($testimonial->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);
        unlink($image);
        $testimonial->delete();

        $message = __( 'Certificate is deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveCertificate($id)
    {
        Certificate::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Certificate is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveCertificate($id)
    {
        Certificate::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Certificate is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
