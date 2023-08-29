<?php

namespace App\Modules\System;

use App\Http\Requests\OrderFormRequest;
use App\Libs\Crud;
use App\Models\Order;
use Illuminate\Http\Request;
use Form;
use Auth;
use Hash;
use Illuminate\Support\Collection;
use Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PostController extends SystemController
{
    public function __invoke(Request $request)
    {

        $crud = new Crud('posts');
//        $crud->columns=['id','title'];
//        $crud->fields = ['description', 'title', 'user_id'];
//        $crud->unset_columns = ['deleted_at'];
        $crud->unset_fields = ['id', 'created_at', 'updated_at', 'deleted_at'];
//        $crud->display_as = [ 'user_id' => 'select user'];
////        $crud->unset_updating_fields = ['deleted_at'];
        $crud->required = ['user_id', 'title'];
       $crud->change_field_type = ['title' => 'file'];
////        $crud->set_field_default_value = ['description' => ['2','1']];
//        $crud->set_field_id = ['title' => 'asd', 'description' => 'dfdf'];
//        $crud->callback_column = ['title' => 'dddd'];
        $crud->setRelation( 'user_id', 'users', 'id', 'name' );
//         $crud->callback_before_insert('dddd');
//        $crud->callback_before_insert( 'edit_description' );
//        $crud->callback_after_insert( 'edit_title_after_insert' );
//         $crud->unset_all_action = false;
//         $crud->unset_action = ['edit'];
//         $crud->where('user_id',1,'!=');
        $crud->route_name = 'system.crud.posts';
//         $crud->add_action('add_button');
//        $crud->add_action('add_button2');
//         $crud->set_subject('Possssssts');
        $crud->extra_data = ['pageTitle'=>__('Post')];
        return $crud->render( $request );
    }


}
