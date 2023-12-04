<?php

namespace App\Modules\System;

use App\Models\admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;


class BlogController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Blog::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $imagePath = asset($data->thumbnail); 
                    return '<img src="' . $imagePath . '" alt="Slider Image" width="100" height="100">'; 
                })
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="'.route('blogs.edit',$data->id).'"><i class="la la-edit"></i> '.__('Edit').'</a>   
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteBlog(\'' . route( 'blogs.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Blog');
        }else{
            $this->viewData['pageTitle'] = __('Blogs');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('blog') ];
        $this->viewData['add_new'] = [ 'text'=> __('Add Blog'), 'route'=> 'blogs.create'];

        return $this->view('blogs.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Blogs');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Blog') ];

        return $this->view('blogs.create',$this->viewData);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,',
            'image' => 'required|image|mimes:jpeg,png,jpg,',
            'title' => 'required|string',
            'name' => 'required|string',
            'desc' => 'nullable|string',
        ],
        [
            'thumbnail.mimes' => 'thumbnail should be extension one of jpg , png or jpeg',
            'thumbnail.image' => 'thumbnail should be extension one of jpg , png or jpeg',
            'image.mimes' => 'image should be extension one of jpg , png or jpeg',
            'image.image' => 'image should be extension one of jpg , png or jpeg',
        ]);

        $image = $request->file('thumbnail');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(350, 230)->save('upload/blog/' . $name_gen);
        $thumbnail = 'upload/blog/' . $name_gen;

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(770, 510)->save('upload/blog/' . $name_gen);
        $save_url = 'upload/blog/' . $name_gen;

        Blog::create([
            'image' => $save_url,
            'thumbnail' => $thumbnail,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'name' => $request->name,
            'desc' => $request->desc
        ]);

        return redirect::route('blogs.index');
    }

    public function edit($id)
    {
        $this->viewData['blogs'] = Blog::FindOrFail($id);
        $this->viewData['pageTitle'] = __('Edit Blog');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Blog') ];

        return $this->view('blogs.edit',$this->viewData);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'thumbnail' => 'image|mimes:jpeg,png,jpg,',
            'image' => 'image|mimes:jpeg,png,jpg,',
            'title' => 'required|string',
            'name' => 'required|string',
            'desc' => 'nullable|string',
        ],
        [
            'thumbnail.mimes' => 'thumbnail should be extension one of jpg , png or jpeg',
            'thumbnail.image' => 'thumbnail should be extension one of jpg , png or jpeg',
            'image.mimes' => 'image should be extension one of jpg , png or jpeg',
            'image.image' => 'image should be extension one of jpg , png or jpeg',
            
        ]);

        $old_thumbnail = $request->old_thumbnail;
        $old_image = $request->old_image;

        if ($request->file('thumbnail')) {
            unlink($old_thumbnail);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(350, 230)->save('upload/blog/' . $name_gen);
            $thumbnail = 'upload/blog/' . $name_gen;
            Blog::where('id', $id)->update(['thumbnail' => $thumbnail]);
        }

        if ($request->file('image')) {
            unlink($old_image);
            $image = $request->file('image_desc');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(770, 510)->save('upload/blog/' . $name_gen);
            $path_url = 'upload/blog/' . $name_gen;
            Blog::where('id', $id)->update(['image' => $path_url]);
        }

        $insertData = Blog::where('id', $id)->update([
            'title' => $request->title,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        if($insertData){
            return $this->response(
                true,
                200,
                __('Data Updated successfully'),
                [
                    'url'=> route('blogs.index')
                ]
            );
        }else{
            return $this->response(
                false,
                11001,
                __('Sorry, we could not add the data')
            );
        }
    }


    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);

        $image = Str::after($blogs->image, 'upload/blog/');
        $image = public_path('upload/blog/' . $image);

        $thumbnail = Str::after($blogs->thumbnail, 'upload/blog/');
        $thumbnail = public_path('upload/blog/' . $thumbnail);

        unlink($image);
        unlink($thumbnail);
        $blogs->delete();

        $message = __( 'Blog deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveBlog($id)
    {
        Blog::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'blog is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveBlog($id)
    {
        Blog::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'blog is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
