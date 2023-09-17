<?php

namespace App\Modules\System;

use App\Models\admin\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class ProjectsController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data = Project::all();
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
                                <a class="dropdown-item" href="'.route('projects.edit',$data->id).'"><i class="la la-edit"></i> '.__('Edit').'</a>       
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteProject(\'' . route( 'projects.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Project');
        }else{
            $this->viewData['pageTitle'] = __('Project');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Project') ];
    
        $this->viewData['add_new'] = [ 'text'=> __('Add Project'), 'route'=> 'projects.create'];
        
        return $this->view('project.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Project');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Project') ];
        return $this->view('project.create', $this->viewData);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,',
            'image_desc' => 'required|image|mimes:jpeg,png,jpg,',
            'title' => 'required|string|max:100',
            'type' => 'required|string',
            'desc' => 'required|string',
            
        ],
        [
            'image.mimes' => 'image should be extension one of jpg , png or jpeg',
            'image.image' => 'image should be extension one of jpg , png or jpeg',
            'image_desc.mimes' => 'image should be extension one of jpg , png or jpeg',
            'image_desc.image' => 'image should be extension one of jpg , png or jpeg',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(481, 325)->save('upload/about/' . $name_gen);
            $save_url = 'upload/about/' . $name_gen;
        }

        if ($request->file('image_desc')) {
            $image = $request->file('image_desc');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(770, 510)->save('upload/about/' . $name_gen);
            $path_url = 'upload/about/' . $name_gen;
        }

        Project::create([
            'image' => $save_url,
            'image_desc' => $path_url,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'type' => $request->type,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('projects.index')->with($notification);
    }


    public function show($id)
    {
        return back();
    }


    public function edit($id)
    {
        $this->viewData['projects'] = Project::findOrFail($id);
        $this->viewData['pageTitle'] = __('Edit Project');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Project') ];
        return $this->view('project.edit', $this->viewData);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,',
            'image_desc' => 'image|mimes:jpeg,png,jpg,',
            'title' => 'required|string|max:100',
            'type' => 'required|string',
            'desc' => 'required|string',
            
        ],
        [
            'image.mimes' => 'image should be extension one of jpg , png or jpeg',
            'image.image' => 'image should be extension one of jpg , png or jpeg',
            'image_desc.mimes' => 'image should be extension one of jpg , png or jpeg',
            'image_desc.image' => 'image should be extension one of jpg , png or jpeg',
        ]);

        $oldImage = $request->oldImage;
        $oldImageDesc = $request->oldImageDesc;

        if ($request->file('image')) {
            unlink($oldImage);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(481, 325)->save('upload/about/' . $name_gen);
            $save_url = 'upload/about/' . $name_gen;
            Project::where('id', $id)->update(['image' => $save_url]);
        }

        if ($request->file('image_desc')) {
            unlink($oldImageDesc);
            $image = $request->file('image_desc');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(770, 510)->save('upload/about/' . $name_gen);
            $path_url = 'upload/about/' . $name_gen;
            Project::where('id', $id)->update(['image_desc' => $path_url]);
        }

        Project::where('id', $id)->update([
            'title' => $request->title,
            'type' => $request->type,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('projects.index')->with($notification);
    }


    public function destroy($id)
    {
        $projeact = Project::findOrFail($id);

        $image = Str::after($projeact->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);

        $image_desc = Str::after($projeact->image_desc, 'upload/about/');
        $image_desc = public_path('upload/about/' . $image_desc);
        unlink($image);
        unlink($image_desc);

        $projeact->delete();

        $message = __( 'Project deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveTestimonial($id)
    {
        // Client::findOrFail($id)->update(['is_publish' => 'in-active']);
        // $notification = array(
        //     'message' => 'Client is Inactive',
        //     'alert-type' => 'success',
        // );

        // return redirect()->back()->with($notification);
    }

    public function ActiveTestimonial($id)
    {
        // Client::findOrFail($id)->update(['is_publish' => 'active']);
        // $notification = array(
        //     'message' => 'Client is Active',
        //     'alert-type' => 'success',
        // );

        // return redirect()->back()->with($notification);
    }
}
