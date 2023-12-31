<?php

namespace App\Modules\System;

use App\Models\admin\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;


class CareerController extends SystemController
{
    public function index()
    {
        $this->viewData['pageTitle'] = __('Careers');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Career') ];
        $this->viewData['add_new'] = [ 'text'=> __('Add Career'), 'route'=> 'careers.create'];

        $this->viewData['careers'] = Career::get();
        return $this->view('career.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Career');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Career') ];
        return $this->view('career.create', $this->viewData);
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string',
                'location' => 'required|string',
                'desc' => 'required|string',
                'req' => 'required|string'
            ]);

            Career::create([
                'title' => $request->title,
                'location' => $request->location,
                'desc' => $request->desc,
                'req' => $request->req,
            ]);
            $notification = array(
                'message' => 'Career Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('careers.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $this->viewData['career'] = Career::findOrFail($id);
        $this->viewData['pageTitle'] = __('Careers');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('Career') ];
        return $this->view('career.edit', $this->viewData);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string',
                'location' => 'required|string',
                'desc' => 'required|string',
                'req' => 'required|string'
            ]);
            Career::where('id', $id)->update([
                'title' => $request->title,
                'location' => $request->location,
                'desc' => $request->desc,
                'req' => $request->req,
            ]);
            $notification = array(
                'message' => 'Career Updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('careers.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        Career::findOrFail($id)->delete();
        $message = __( 'career is deleted successfully' );
        return $this->response(true, 200, $message );
    }

}
