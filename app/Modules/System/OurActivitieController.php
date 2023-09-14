<?php

namespace App\Modules\System;

use App\Models\OurActive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class OurActivitieController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data = OurActive::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu '.( (\App::getLocale() == 'ar') ? 'dropdown-menu-left' : 'dropdown-menu-right').'" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="'.route('our-activities.edit',$data->id).'"><i class="la la-edit"></i> '.__('Edit').'</a>       
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteactivitie(\'' . route( 'our-activities.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Activities');
        }else{
            $this->viewData['pageTitle'] = __('Activities');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Activities') ];
    
        $this->viewData['add_new'] = [ 'text'=> __('Add Activities'), 'route'=> 'our-activities.create'];
        
        return $this->view('our-activite.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Activities');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Activities') ];
        return $this->view('our-activite.create', $this->viewData);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            // 'icon' => 'image|mimes:jpeg,png,jpg,',
            'title' => 'required|string|max:100',
            'desc' => 'required|string',
            
        ]);

        OurActive::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('our-activities.index')->with($notification);
    }


    public function show($id)
    {
        return back();
    }


    public function edit($id)
    {
        $this->viewData['activities'] = OurActive::findOrFail($id);
        $this->viewData['pageTitle'] = __('Activities');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Activities') ];
        return $this->view('our-activite.edit', $this->viewData);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            // 'icon' => 'image|mimes:jpeg,png,jpg,',
            'title' => 'required|string|max:100',
            'desc' => 'required|string',
            
        ]);

        OurActive::where('id', $id)->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('our-activities.index')->with($notification);

    }


    public function destroy($id)
    {
        $projeact = OurActive::findOrFail($id);
        $projeact->delete();

        $message = __( 'Activitie deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveOurActive($id)
    {
        // Client::findOrFail($id)->update(['is_publish' => 'in-active']);
        // $notification = array(
        //     'message' => 'Client is Inactive',
        //     'alert-type' => 'success',
        // );

        // return redirect()->back()->with($notification);
    }

    public function ActiveOurActive($id)
    {
        // Client::findOrFail($id)->update(['is_publish' => 'active']);
        // $notification = array(
        //     'message' => 'Client is Active',
        //     'alert-type' => 'success',
        // );

        // return redirect()->back()->with($notification);
    }
}
