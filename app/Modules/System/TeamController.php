<?php

namespace App\Modules\System;

use App\Models\admin\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class TeamController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Team::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $imagePath = asset($data->image); 
                    return '<img src="' . $imagePath . '" alt="team Image" width="100" height="100">'; 
                })
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="'.route('teams.edit',$data->id).'"><i class="la la-edit"></i> '.__('Edit').'</a>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteTeam(\'' . route( 'teams.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Team');
        }else{
            $this->viewData['pageTitle'] = __('Teams');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('teams') ];
        $this->viewData['add_new'] = [  'text'=> __('Add team'), 'route'=>'teams.create' ];
    
        
        return $this->view('about.team.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Team');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('team') ];
        return $this->view('about.team.create', $this->viewData);
    }


    public function store(Request $request)
    {
    //    try{
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(360, 360)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;

        Team::create([
            'name' => $request->name,
            'title' => $request->title,
            'image' => $save_url,
            'link_one' => $request->link_one,
            'link_two' => $request->link_two,
            'link_three' => $request->link_three,
        ]);

        $notification = array(
            'message' => 'Team Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('teams.index')->with($notification);
        //    }catch (\Exception $e) {
        //        return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        //    }
    }


    public function edit($id)
    {
        $this->viewData['teams'] = Team::findOrFail($id);
        $this->viewData['pageTitle'] = __('Edit Teams');

        $teamName = $this->viewData['teams']->name;
        $this->viewData['breadcrumb'][] = [ 'text'=> __('edit '). $teamName];
        return $this->view('about.team.edit', $this->viewData);
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
                Image::make($image)->resize(360,360)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;
                Team::findOrFail($id)->update(['image' => $save_url]);
            }

            Team::findOrFail($id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'link_one' => $request->link_one,
                'link_two' => $request->link_two,
                'link_three' => $request->link_three,
            ]);

            $notification = array(
                'message' => 'Team updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('teams.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $image = Str::after($team->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);
        unlink($image);
        $team->delete();

        $message = __( 'Team deleted successfully' );
        return $this->response(true, 200, $message );
    }
}
