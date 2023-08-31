<?php

namespace App\Modules\System;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class BlogController extends SystemController
{
    public function index()
    {
        $this->viewData['blogs'] = Blog::all();
        $this->viewData['pageTitle'] = __('Blogs');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Blog') ];
        
        $this->viewData['add_new'] = [  'text'=> __('Add Blog'), 'route'=>'blogs.create' ];

        return $this->view('blogs.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('create Blogs');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Blog') ];

        return $this->view('blogs.create',$this->viewData);
    }


    public function store(Request $request)
    {
        // dd($request);
    //    try{
        $image = $request->file('thumbnail');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(81, 80)->save('upload/about/' . $name_gen);
        $thumbnail = 'upload/about/' . $name_gen;

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(770, 510)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;

        Blog::create([
            'image' => $save_url,
            'thumbnail' => $thumbnail,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'name' => $request->name,
            'desc' => $request->desc
        ]);

        $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('blogs.index')->with($notification);
    //    }catch (\Exception $e) {
    //        return redirect::back()->withErrors(['errors' => $e->getMessage()]);
    //    }
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
