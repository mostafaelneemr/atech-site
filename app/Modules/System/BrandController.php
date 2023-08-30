<?php

namespace App\Modules\System;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class BrandController extends SystemController
{
    public function index()
    {
        $this->viewData['brands'] = Brand::all();
        $this->viewData['pageTitle'] = __('Brands');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Brand') ];
        
        return $this->view('brands.index', $this->viewData);
    }

    public function create()
    {
        // 
    }


    public function store(Request $request)
    {
       try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(81, 80)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;
        Brand::create(['image' => $save_url]);

        $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('brands.index')->with($notification);
       }catch (\Exception $e) {
           return redirect::back()->withErrors(['errors' => $e->getMessage()]);
       }
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
        $testimonial = Brand::findOrFail($id);
        $image = Str::after($testimonial->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);
        unlink($image);
        $testimonial->delete();

        $message = __( 'Team deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveTestimonial($id)
    {
        Brand::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Testimonial is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveTestimonial($id)
    {
        Brand::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Testimonial is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
