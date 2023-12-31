<?php

namespace App\Modules\System;

use App\Models\admin\Fontawsome;
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
                            <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
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
        $this->viewData['fontawsomes'] = Fontawsome::all();
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
            'fontawsome_id' => $request->fontawsome_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'sort' => 10,
        ]);

        $notification = array(
            'message' => 'Service Is Added Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('our-activities.index')->with($notification);
    }

    public function edit($id)
    {
        $this->viewData['fontawsomes'] = Fontawsome::all();
        $this->viewData['activities'] = OurActive::findOrFail($id);
        $this->viewData['pageTitle'] = __('Activities');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Activities') ];
        return $this->view('our-activite.edit', $this->viewData);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                // 'icon' => 'image|mimes:jpeg,png,jpg,',
                'title' => 'required|string|max:100',
                'desc' => 'required|string',
                'sort' => 'required',                
            ]);
    
            OurActive::where('id', $id)->update([
                'fontawsome_id' => $request->fontawsome_id,
                'title' => $request->title,
                'desc' => $request->desc,
                'sort' => $request->sort,
            ]);
    
            $notification = array(
                'message' => 'Service Is Updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('our-activities.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $projeact = OurActive::findOrFail($id);
        $projeact->delete();

        $message = __( 'Activitie deleted successfully' );
        return $this->response(true, 200, $message );
    }
}
