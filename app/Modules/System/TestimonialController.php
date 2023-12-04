<?php

namespace App\Modules\System;

use App\Models\admin\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class TestimonialController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Testimonial::all();
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
                                <a class="dropdown-item" href="'.route('testimonials.edit',$data->id).'"><i class="la la-edit"></i> '.__('Edit').'</a>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteTestimonial(\'' . route( 'testimonials.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Testimonail');
        }else{
            $this->viewData['pageTitle'] = __('Testimonails');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('testimonail') ];
        $this->viewData['add_new'] = [  'text'=> __('Add testimonail'), 'route'=>'testimonials.create' ];
    
        
        return $this->view('about.testimonial.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Testimonail');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('testimonail') ];
        return $this->view('about.testimonial.create', $this->viewData);
    }


    public function store(Request $request)
    {
    //    try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(60, 60)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;

        Testimonial::create([
            'name' => $request->name,
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('testimonials.index')->with($notification);
        //    }catch (\Exception $e) {
        //        return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        //    }
    }


    public function edit($id)
    {
        $this->viewData['testimonails'] = Testimonial::findOrFail($id);
        $this->viewData['pageTitle'] = __('Edit Testimonails');

        $testimonialName = $this->viewData['testimonails']->name;
        $this->viewData['breadcrumb'][] = [ 'text'=> __('edit '). $testimonialName];
        return $this->view('about.testimonial.edit', $this->viewData);
    }


    public function update(Request $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image')){
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(60,60)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;
                Testimonial::findOrFail($id)->update(['image' => $save_url]);
            }

            Testimonial::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'desc' => $request->desc,

            ]);

            $notification = array(
                'message' => 'Testimonial updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('testimonials.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $image = Str::after($testimonial->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);
        unlink($image);
        $testimonial->delete();

        $message = __( 'Team deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveTestimonial($id)
    {
        Testimonial::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Testimonial is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveTestimonial($id)
    {
        Testimonial::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Testimonial is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
