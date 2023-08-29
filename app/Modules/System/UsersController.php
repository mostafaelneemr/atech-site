<?php

namespace App\Modules\System;

use App\Http\Requests\OrderFormRequest;
 use App\Models\Order;
use Illuminate\Http\Request;
 use Form;
use Auth;
use Hash;
use Illuminate\Support\Collection;
use Datatables;

class UsersController extends SystemController
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->isDataTable){

            $eloquentData = Order::select([
            'id','status','user_id','driver_id','date_time','payment_type','total'
            ])->with(['user','driver']);

            if($request->withTrashed){
                $eloquentData->onlyTrashed();
            }
            whereBetween($eloquentData,'DATE(created_at)',$request->created_at1,$request->created_at2);
            whereBetween($eloquentData,'total',$request->total1,$request->total2);


            if($request->id){
                $eloquentData->where('id',$request->id);
            }

            if($request->status){
                $eloquentData->where('status',$request->status);
            }

            if($request->user_id){
                $eloquentData->where('user_id',$request->user_id);
            }

            if($request->driver_id){
                $eloquentData->where('driver_id',$request->driver_id);
            }

            if($request->payment_type){
                $eloquentData->where('payment_type',$request->payment_type);
            }

            if ($request->downloadExcel == "true") {

                $excelData = $eloquentData;
                $excelData = $excelData->get();
                return  exportXLS(__('Staff'),
                    [
                        __('ID'),
                        __('Status'),
                        __('User'),
                        __('Driver'),
                        __('Date time'),
                        __('Total'),
                        __('Payment Type'),
                        __('Action')
                    ],
                    $excelData,
                    [
                        'id' => 'id',
                        'status' => 'status',
                        'user' => function($data){
                            if($data->user_id) {
                                return $data->user->name.'-'.$data->user->type;
                            }else{
                                return '--';
                            }
                        },
                        'driver' => function($data){
                            if($data->driver_id) {
                                return $data->driver->name;
                            }else{
                                return '--';
                            }
                        },
                        'date_time' => 'date_time',
                        'total' => 'total',
                        'payment_type' => 'payment_type'
                    ]
                );
            }


            return Datatables::of($eloquentData)
                ->addColumn('id','{{$id}}')
                ->addColumn('status','{{$status}}')
                ->addColumn('user_id',function ($data){
                    if($data->user_id) {
                        return '<a target="_blank" href="'.route('system.user.show',$data->id).'">'.$data->user->name.'('.$data->user->type.')'.'</a>';
                    }else{
                        return '--';
                    }
                })
                ->addColumn('driver_id',function ($data){
                    if($data->driver_id) {
                        return '<a target="_blank" href="'.route('system.driver.show',$data->id).'">'.$data->driver->name.'</a>';
                    }else{
                        return '--';
                    }
                })
                ->addColumn('date_time','{{$date_time}}')
                ->addColumn('total','{{$total}}')
                ->addColumn('payment_type','{{$payment_type}}')
                ->addColumn('action', function($data){
                    return '<a class="dropdown-item" href="'.route('system.orders.show',$data->id).'" target="_blank"><i class="la la-search-plus"></i> '.__('View').'</a>';
                }) ->make(true);
        }else{
            // View Data
            $this->viewData['tableColumns'] = [
                __('ID'),
                __('Status'),
                __('User'),
                __('Driver'),
                __('Date time'),
                __('Total'),
                __('Payment Type'),
                __('Action')
            ];

            $this->viewData['js_columns'] =[
                'id'=>'orders.id',
                'status'=>'orders.status',
                'user_id'=>'orders.user_id',
                'driver_id'=>'orders.driver_id',
                'date_time'=>'orders.date_time',
                'total'=>'orders.total',
                'payment_type'=>'orders.payment_type',
                'action'=>'action'
            ];

            $this->viewData['breadcrumb'][] = [
                'text'=> __('Order Permission')
            ];

            if($request->withTrashed){
                $this->viewData['pageTitle'] = __('Deleted Order Permission');
            }else{
                $this->viewData['pageTitle'] = __('Order Permission');
            }

            return $this->view('orders.index',$this->viewData);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        // Main View Vars
        $this->viewData['breadcrumb'][] = [
            'text'=> __('Staff Permission'),
            'url'=> route('system.permission-group.index')
        ];

        $this->viewData['breadcrumb'][] = [
            'text'=> __('Create Staff Permission'),
        ];

        $this->viewData['pageTitle'] = __('Create Staff Permission');

        $this->viewData['permissions'] = $this->permissions();

        return $this->view('permission-group.create',$this->viewData);
    }


    public function store(PermissionGroupFormRequest $request)
    {
        $permissions = array();
        $perms = recursiveFind($this->permissions(),'permissions');
        foreach($perms as $val){
            foreach($val as $key=>$oneperm){
                $permissions[$key] = $oneperm;
            }
        }

        $coll = new Collection();

        $requestData = $request->all();



        if($row = PermissionGroup::create($requestData)){
            array_map(function($oneperm) use ($permissions,$row,&$coll){
                foreach ($permissions[$oneperm] as $oneroute){
                    $coll->push(new Permission(['route_name'=>$oneroute,'permission_group_id'=>$row->id]));
                }
            },$request->all()['permissions']);
            $row->permission()->insert($coll->toArray());

            return redirect()
                ->route('system.permission-group.create')
                ->with('status', 'success')
                ->with('msg', __('Permission Group added'));
        } else{
            return redirect()
                ->route('system.permission-group.create')
                ->with('status','danger')
                ->with('msg',__('Sorry Couldn\'t add Permission Group'));
        }

    }


    public function show(PermissionGroup $permission_group)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionGroup $permission_group)
    {
        // Main View Vars
        $this->viewData['breadcrumb'][] = [
            'text'=> __('Staff Permission'),
            'url'=> route('system.permission-group.index')
        ];

        $this->viewData['breadcrumb'][] = [
            'text'=> __('Edit Staff Permission'),
        ];

        $this->viewData['pageTitle'] = __('Edit Staff Permission');

        $this->viewData['permission_group'] = $permission_group;
        $this->viewData['permissions'] = $this->permissions();
        $this->viewData['currentpermissions'] = $permission_group->permission()->get()->pluck('route_name')->toArray();

        return $this->view('permission-group.create',$this->viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionGroupFormRequest $request, PermissionGroup $permission_group)
    {
        $permissions = array();
        $perms = recursiveFind($this->permissions(),'permissions');
        foreach($perms as $val){
            foreach($val as $key=>$oneperm){
                $permissions[$key] = $oneperm;
            }
        }

        $requestData = $request->all();


        if($request->only(['permissions'])['permissions'] !== null){
            $coll = new Collection();
            array_map(function($oneperm) use ($permissions,&$coll,$permission_group){
                foreach ($permissions[$oneperm] as $oneroute){
                    $coll->push(new Permission(['route_name'=> $oneroute,'permission_group_id'=> $permission_group->id]));
                }
            },$request->all()['permissions']);
        }


        if($permission_group->update($requestData)) {
            $permission_group->permission()->delete();
            if(isset($coll) && $coll->count()) {
                $permission_group->permission()->insert($coll->toArray());
            }

            return redirect()
                ->route('system.permission-group.edit',$permission_group->id)
                ->with('status','success')
                ->with('msg',__('Successfully edit Permissions Group'));
        }else{
            return redirect()
                ->route('system.permission-group.edit')
                ->with('status','success')
                ->with('msg',__('Sorry Couldn\'t Edit Permissions Group'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff,Request $request)
    {
        return back();
    }

}
