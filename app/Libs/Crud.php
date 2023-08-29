<?php


namespace App\Libs;


use App\Modules\System\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datatables;
use Illuminate\Support\Facades\Validator;

class Crud
{
    public $table;
    public $columns = [];
    public $fields = [];
    private $viewData = [];
    public $display_as = [];
    public $set_field_id = [];
    public $set_field_class = [];
    public $set_field_default_value = [];
    public $callback_column = [];
    public $unset_columns = [];
    public $unset_fields = [];
    public $unset_updating_fields = [];
    public $change_field_type = [];
    private $request_data = [];
    private $callback_before_insert_attr = '';
    private $callback_after_insert_attr = '';
    private $callback_before_update_attr = '';
    private $callback_after_update_attr = '';
    private $called_class = '';
    public $required = [];
    public $validation = [];
    public $relation_fields = [];
    private $unset_columns_without_table = [];
    private $callback_before_delete_attr = '';
    private $callback_after_delete_attr = '';
    public $unset_all_action = false;
    public $unset_action = [];
    public $export = true;
    public $export_type = 'front';
    public $filter = false;
    private $where = [];
    private $whereIn = [];
    private $order_by = [];
    private $limit = '';
    private $add_action_attr = [];
    private $subject = '';
    private $export_array_index = [];
    private $file_type = [];
    private $full_columns = [];
    public $extra_data = [];
    public $route_name = '';
    public $sort_column = '';


    protected function db_columns()
    {

        if (!empty( $this->sort_column )) {
            if (!in_array( $this->sort_column, $this->columns )) {
                array_unshift( $this->columns, $this->sort_column );
            }
        }

        $all_columns = [];
        if (!empty( $this->columns )) {
            $without_table_name = [];
            foreach ($this->columns as $col) {
                $all_columns [] = $this->table . '.' . $col;
                $without_table_name [] = $col;
            }
        } else {
            $cols = DB::select( DB::raw( 'SHOW COLUMNS FROM `' . $this->table . '`' ) );
            $without_table_name = [];
            foreach ($cols as $col) {
                $all_columns [] = $this->table . '.' . $col->Field;
                $without_table_name [] = $col->Field;
            }
        }
        $this->unset_columns_without_table = $this->unset_columns;
        array_walk( $this->unset_columns, function (&$value, $key) {
            return $value = $this->table . '.' . $value;
        } );
        $this->full_columns = $all_columns;


        return array_diff( $all_columns, $this->unset_columns );
    }

    protected function query_columns()
    {
        $columns = $this->db_columns();
        $eloquentData = DB::table( $this->table );
        if (!empty( $this->columns )) {
            $columns = $this->full_columns;
        }
        if (!empty( $this->relation_fields )) {
            foreach ($this->relation_fields as $key => $field) {
                if (isset( explode( ' as ', $field['relation_table_name'] )[1] )) {
                    $as_relation_table_name = explode( ' as ', $field['relation_table_name'] )[1];
                } else {
                    $as_relation_table_name = $field['relation_table_name'];
                }
                $columns[$key] = $as_relation_table_name . '.' . $field['relation_show_column'] . ' as ' . $key;
                $columns['relation_' . $key] = $this->table . '.' . $key . ' as ' . 'relation_' . $key;
                $eloquentData->leftJoin( $field['relation_table_name'], $as_relation_table_name . '.' . $field['relation_column'], '=', $this->table . '.' . $key );
            }
        }
        $eloquentData = $this->setWhere( $eloquentData );
        //  $eloquentData =  $this->setOrderBy($eloquentData);
        return $eloquentData->select( array_merge( ['*'], $columns ) );
    }

    public function __construct($table_name)
    {
        $this->table = $table_name;
        $this->get_calling_class();
    }

    private function check_actions($action = null)
    {
        if ($this->unset_all_action || (!empty( $action ) and in_array( $action, $this->unset_action ))) {
            abort( 401 );
        }
        return true;
    }

    public function callback_before_insert($function_name)
    {
        $this->callback_before_insert_attr = $function_name;
        return $this;
    }

    public function callback_after_insert($function_name)
    {
        $this->callback_after_insert_attr = $function_name;
    }

    public function callback_before_update($function_name)
    {
        $this->callback_before_update_attr = $function_name;
        return $this;
    }

    public function callback_after_update($function_name)
    {
        $this->callback_after_update_attr = $function_name;
        return $this;
    }

    public function callback_before_delete($function_name)
    {
        $this->callback_before_delete_attr = $function_name;
        return $this;
    }

    public function callback_after_delete($function_name)
    {
        $this->callback_after_delete_attr = $function_name;
        return $this;
    }

    public function add_action($action)
    {
        $this->add_action_attr [] = $action;
        return $this;
    }

    public function set_subject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function where($field, $value, $operator = '=')
    {
        $this->where[] = array($field, $value, $operator);
        return $this;
    }

    public function whereIn($field, $value)
    {
        $this->whereIn[] = array($field, $value);
        return $this;
    }

    private function setWhere($datatable)
    {
        foreach ($this->where as $item) {
            $datatable->where( $item[0], $item[2], $item[1] );
        }
        foreach ($this->whereIn as $item) {
            $datatable->whereIn( $item[0], $item[1] );
        }

        return $datatable;
    }


    public function orWhere($field, $value, $operator = '=')
    {
        $this->where[] = array($field, $value, $operator);
        return $this;
    }

    private function setOrWhere($datatable)
    {
        foreach ($this->where as $item) {
            $datatable->orWhere( $item[0], $item[2], $item[1] );
        }
        return $datatable;
    }

    public
    function orderBy($filed, $dir = 'asc')
    {
        $this->order_by = array('field' => $filed, 'dir' => $dir);
        return $this;
    }

//    private function setOrderBy($datatable)
//    {
//        if(!empty($this->order_by)) {
//           // return $datatable->orderBy($this->table.'.'.$this->order_by['field'], $this->order_by['dir']);
//            $this->extra_data['sort_index'] =array_search  ($this->order_by['field'], $this->columns);
//        }elseif(!empty($this->sort_column)){
//            $this->extra_data['sort_index'] =array_search  ($this->sort_column, $this->columns);
//        //  return $datatable->orderBy($this->table.'.'.$this->sort_column,'asc');
//        }
//
//        return $datatable;
//    }


    public
    function limit($limit = 25)
    {
        $this->limit = $limit;
        return $this;
    }

    private function setLimit($datatable)
    {
        $datatable->limit( $this->limit );
    }


    public
    function setRelation($column_name, $relation_table_name, $relation_column, $relation_show_column = null, $where = [])
    {
        $this->relation_fields = array_merge( $this->relation_fields, [$column_name => ['relation_table_name' => $relation_table_name, 'relation_column' => $relation_column, 'relation_show_column' => $relation_show_column]] );
        $relation_data = array_column( DB::table( $relation_table_name )->select( '*' )->where( $where )->get()->toArray(), $relation_show_column, $relation_column );
        $this->set_field_default_value[$column_name] = $relation_data;
        $this->change_field_type[$column_name] = 'select';
        return $this;
    }

    protected
    function get_calling_class()
    {

        //get the trace
        $trace = debug_backtrace();

        // Get the class that is asking for who awoke it
        $class_name = $trace[2]['class'];
        $this->called_class = new $class_name();
    }

    protected
    function validations()
    {
        if (!empty( $this->validation )) {
            $validator = Validator::make( $this->request_data->all(), $this->validation );
            if ($validator->fails()) {
                return $this->ValidationError( $validator, __( 'Validation Error' ) );
            }
        }
        $validationArray = [];
        foreach ($this->required as $item) {
            $validationArray[$item] = 'required';
        }
        $validator = Validator::make( $this->request_data->all(), $validationArray );
        if ($validator->fails()) {
            return $this->ValidationError( $validator, __( 'Validation Error' ) );
        }
        return ['status' => true];
    }

    public
    function render(Request $request)
    {

        $this->request_data = $request;
        if (!$request->has( 'func' ) || $request->func == 'index') {
            return $this->show_table( $request );
        }
        if ($request->func == 'show') {
            return $this->show_one( $request->id );
        }
        if ($request->func == 'create') {
            return $this->show_create_page();
        }
        if ($request->func == 'edit') {
            return $this->show_edit_page( $request->id );
        }
        if ($request->func == 'store') {
            return $this->saveData( $request );
        }
        if ($request->func == 'update') {
            return $this->updateData( $request, $request->id );
        }
        if ($request->func == 'destroy') {
            return $this->destroy( $request->id );
        }
        if ($request->func == 'sort') {
            return $this->sort( $request );
        }
    }


    private function sort($request)
    {
        foreach ($request->rows as $row) {
            \DB::table( $this->table )->where( 'id', $row['old'] )->update( [
                $this->sort_column => $row['sort']
            ] );
        }

        return response()->json( [] );
    }

    public
    function callback_display_as($columns)
    {
        $columns_array = [];

        if (!empty( $this->display_as )) {
            foreach ($columns as $column) {
                if (array_key_exists( explode( '.', $column )[1], $this->display_as )) {

                    $columns_array[] = $this->display_as[explode( '.', $column )[1]];
                } else {
                    $columns_array[] = explode( '.', $column )[1];
                }
            }
        } else {

            foreach ($columns as $column) {

                $ex = explode( '.', $column );
                $columns_array[] = __( str_replace( '_', ' ', $ex[1] ) );
            }


        }
        if (!$this->unset_all_action) {
            $columns_array['action'] = 'action';
        }

        return $columns_array;
    }

    public
    function js_columns($columns)
    {
        $js_columns = [];
        $columns = array_diff( $columns, $this->unset_columns_without_table );
        foreach ($columns as $key => $column) {
            $this->export_array_index [] = $key;
            $js_columns[explode( '.', $column )[1]] = $column;
        }
        if (!$this->unset_all_action) {
            $js_columns['action'] = 'action';
        }
        return $js_columns;
    }

    public
    function show_table($request)
    {
        if ($request->isDataTable) {
            $datatable = Datatables::of( $this->query_columns() );

            if (!empty( $this->callback_column )) {
                foreach ($this->callback_column as $key => $row) {
                    $datatable->addColumn( $key, function ($data) use ($key, $row) {
                        return $this->called_class->$row( $data, $data->$key );
                    } );
                }
                $datatable = $datatable->rawColumns( array_keys( $this->callback_column ) );
            }
            $datatable = $datatable->editColumn( 'action', function ($data) {
                $links = '';
                if (!in_array( 'view', $this->unset_action )) {
                    $links .= ' <a class="dropdown-item" href="' . route( $this->route_name ) . '?func=show&id=' . $data->id . '" target="_blank"><i class="far fa-eye"></i> ' . __( 'View' ) . '</a>';
                }
                if (!in_array( 'edit', $this->unset_action )) {
                    $links .= ' <a class="dropdown-item" href="' . route( $this->route_name ) . '?func=edit&id=' . $data->id . '"><i class="la la-edit"></i> ' . __( 'Edit' ) . '</a>';
                }
                if (!in_array( 'delete', $this->unset_action )) {
                    $links .= '<a class="dropdown-item" href="javascript:void(0);" onclick="deleteRecord(\'' . route( $this->route_name ) . '?func=destroy&id=' . $data->id . '\')"><i class="la la-trash-o"></i> ' . __( 'Delete' ) . '</a>';
                }
                if (!empty( $this->add_action_attr )) {
                    foreach ($this->add_action_attr as $one) {
                        $links .= $this->called_class->$one( $data );
                    }
                }
                return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu ' . ((\App::getLocale() == 'ar') ? 'dropdown-menu-left' : 'dropdown-menu-right') . '" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                            ' . $links . '
                            </div>
                        </span>';
            } )
                ->escapeColumns( [] );
            return $datatable = $datatable->make( true );
        } else {
            $this->viewData['tableColumns'] = $this->callback_display_as( $this->db_columns() );
            if (!in_array( 'add', $this->unset_action ) && !$this->unset_all_action) {
                $this->viewData['add_new'] = [
                    'text' => __( 'Add New' ),
                    'route' => $this->route_name
                ];
            }
//            dd( $this->viewData['add_new']);

            $this->viewData['filter'] = $this->filter;
            $this->viewData['download_excel'] = $this->export;
            $this->viewData['export_type'] = $this->export_type;
            $this->viewData['js_columns'] = $this->js_columns( $this->db_columns() );
            $this->viewData['subject'] = empty( $this->subject ) ? $this->table : $this->subject;
            $this->viewData['export_array_index'] = $this->export_array_index;
            $this->viewData['sort_column'] = $this->sort_column;
            $this->viewData['route_name'] = $this->route_name;

            if (!empty( $this->order_by )) {

                $this->extra_data['sort_index'] = array_search( $this->order_by['field'], $this->columns );
            } elseif (!empty( $this->sort_column )) {
                $this->extra_data['sort_index'] = array_search( $this->sort_column, $this->columns );

            }

            $this->viewData = array_merge( $this->viewData, $this->extra_data );
            return view( 'crud.index', $this->viewData );
        }
    }

    public
    function show_one($id)
    {
        $this->check_actions( 'view' );
        $data = $this->query_columns()->where( $this->table . '.id', $id )->first();
        $display_as = $this->display_as;
        $change_field_type = $this->change_field_type;


        $this->viewData['data'] = $data;
        $this->viewData['display_as'] = $display_as;
        $this->viewData['change_field_type'] = $change_field_type;
        if (isset( $this->extra_data['pageTitle'] )) {
            $this->extra_data['pageTitle'] = __( 'Show ' ) . $this->extra_data['pageTitle'];
        }
        $this->viewData = array_merge( $this->viewData, $this->extra_data );

        return view( 'crud.show', $this->viewData );
    }

    public
    function show_create_page()
    {
        $this->check_actions( 'add' );
        $cols = DB::select( DB::raw( 'SHOW COLUMNS FROM `' . $this->table . '` ' ) );
        $fields = [];

        foreach ($cols as $col) {
            if (!empty( $this->fields ) && !in_array( $col->Field, $this->fields )) {
                continue;
            } elseif (!empty( $this->unset_fields )) {
                if (in_array( $col->Field, $this->unset_fields )) {
                    continue;
                }

                $fields [$col->Field] = $this->getField( $col );
            } else {
                $fields [$col->Field] = $this->getField( $col );
            }
        }


        $sort_fields = array();
        if (!empty( $this->fields )) {
            foreach ($this->fields as $field_name) {
                foreach ($fields as $key => $field_array) {
                    if ($field_name == $key) {
                        $sort_fields[$key] = $field_array;
                        break;
                    }
                }
            }
            $fields = $sort_fields;
        }


        $display_as = $this->callback_display_as( $this->db_columns() );
        $route_name = $this->route_name;
        $this->viewData['fields'] = $fields;
        $this->viewData['display_as'] = $display_as;
        $this->viewData['route_name'] = $route_name;
        if (isset( $this->extra_data['pageTitle'] )) {
            $this->extra_data['pageTitle'] = __( 'Create ' ) . $this->extra_data['pageTitle'];
        }
        $this->viewData = array_merge( $this->viewData, $this->extra_data );

        $this->viewData['required'] = $this->required;
        return view( 'crud.create', $this->viewData );
    }

    public
    function show_edit_page($id)
    {
        $this->check_actions( 'edit' );
        $result = DB::table( $this->table )->find( $id );
        $cols = DB::select( DB::raw( 'SHOW COLUMNS FROM `' . $this->table . '` ' ) );
        $fields = [];
        foreach ($cols as $col) {
            if (!empty( $this->unset_updating_fields )) {
                if (in_array( $col->Field, $this->unset_updating_fields )) {
                    continue;
                }
                $fields [$col->Field] = $this->getField( $col->Type );
            } else {
                if (!empty( $this->fields ) && !in_array( $col->Field, $this->fields )) {
                    continue;
                } elseif (!empty( $this->unset_fields )) {
                    if (in_array( $col->Field, $this->unset_fields )) {
                        continue;
                    }

                }
                $fields [$col->Field] = $this->getField( $col );
            }


            $fields [$col->Field]['value'] = $result->{$col->Field};
        }

        $display_as = $this->display_as;
        $route_name = $this->route_name;

        $this->viewData['display_as'] = $display_as;
        $this->viewData['route_name'] = $route_name;
        $this->viewData['result'] = $result;
        $this->viewData['fields'] = $fields;

        if (isset( $this->extra_data['pageTitle'] )) {
            $this->extra_data['pageTitle'] = __( 'Edit ' ) . $this->extra_data['pageTitle'];
        }
        $this->viewData = array_merge( $this->viewData, $this->extra_data );

        $this->viewData['required'] = $this->required;
        return view( 'crud.create', $this->viewData );
    }


    protected
    function getField($col)
    {

        $column = [];
        $column['display_as'] = $this->setDisplayAs( $col );
        $column['id'] = $this->setFieldsId( $col );
        $column['class'] = $this->setFieldsClass( $col );
        $column['type'] = $this->getTypesOfFields( $col );
        $column['default_value'] = $this->setDefaultValue( $col, $column['type'] );
        return $column;
    }

    protected
    function setDefaultValue($col, $type)
    {
        if (array_key_exists( $col->Field, $this->set_field_default_value )) {
            if (in_array( $type, ['select', 'multi_select'] )) {
                $default_value = (array)$this->set_field_default_value[$col->Field];
                if (isset( $default_value[0] )) {
                    return array_combine( $default_value, $default_value );
                }
                return $default_value;
            }
            return $this->set_field_default_value[$col->Field];

        }
        return '';
    }

    protected
    function setFieldsId($col)
    {
        if (array_key_exists( $col->Field, $this->set_field_id )) {
            return $this->set_field_id[$col->Field];
        }
        return $col->Field . '_id';
    }

    protected
    function setFieldsClass($col)
    {
        if (array_key_exists( $col->Field, $this->set_field_class )) {
            return $this->set_field_class[$col->Field];
        }
        return $col->Field . '_class';
    }

    protected
    function setDisplayAs($col)
    {
        if (array_key_exists( $col->Field, $this->display_as )) {
            return $this->display_as[$col->Field];
        } else {

            return __( str_replace( '_', ' ', $col->Field ) );
        }

    }

    protected
    function getTypesOfFields($col)
    {

        if (!empty( $this->change_field_type ) && array_key_exists( $col->Field, $this->change_field_type )) {
            if ($this->change_field_type[$col->Field] == 'file') {
                $this->file_type[] = $col->Field;
            }
            return $this->change_field_type[$col->Field];
        }
        switch ($col->Type) {
            case "int(11)":
                return "text";
                break;
            case "timestamp":
                return 'date';
                break;
            case "text":
                return 'text';
                break;
            case "varchar(255)":
                return 'text';
                break;
            default :
                return 'text';
        }
    }

    public
    function getFields()
    {
        $cols = DB::select( DB::raw( 'SHOW COLUMNS FROM `' . $this->table . '`' ) );
        $fields = [];
        foreach ($cols as $col) {
            $fields [] = $col->Field;
        }

        return array_diff( $fields, $this->unset_fields );
    }

    public
    function getUpdatingFields()
    {
        $cols = DB::select( DB::raw( 'SHOW COLUMNS FROM `' . $this->table . '`' ) );
        $fields = [];
        foreach ($cols as $col) {
            $fields [] = $col->Field;
        }
        return array_diff( $fields, $this->unset_updating_fields );
    }

    public
    function saveData($request)
    {
        if (!$this->validations()['status']) {
            return $this->validations();
        }

        $request_data = $request->only( $this->getFields() );
        if (!empty( $this->callback_before_insert_attr )) {
            $request_data = $this->called_class->{$this->callback_before_insert_attr}( $request_data );
        }

        if ($request->file()) {
            foreach ($request->file() as $key => $file) {
                if (in_array( $key, $this->getFields() )) {

                    $imageName = time() . '.' . $file->extension();
                    $path = 'images/' . $imageName;
                    $file->move( public_path( 'images' ), $imageName );
                    if ($path) {
                        $request_data[$key] = $path;
                    }
                }
            }
        }

        $insertId = DB::table( $this->table )->insertGetId(
            $request_data
        );
        if ($insertId) {
            if (!empty( $this->callback_after_insert_attr )) {
                $insertData = DB::table( $this->table )->find( $insertId );
                $this->called_class->{$this->callback_after_insert_attr}( $insertData );
            }

            return $this->response(
                true,
                200,
                __( 'Data added successfully' ),
                [
                    'url' => route( $this->route_name ) . '?func=index'
                ]
            );
        } else {
            return $this->response(
                false,
                11001,
                __( 'Sorry, we could not add the data' )
            );
        }
    }

    public
    function updateData($request, $id)
    {
        try {
            $this->validations();
            $result = DB::table( $this->table )->find( $id );
            if (!empty( $this->callback_before_update_attr )) {
                $request = $this->called_class->{$this->callback_before_update_attr}( $result, $request );
            }
            $data = $request->only( $this->getFields() );
            if ($request->file()) {
                foreach ($request->file() as $key => $file) {
//                    dd($request,$file,$key);
                    if (in_array( $key, $this->getFields() )) {
                        // $request->file('avatar')->store(setting('system_path').'/avatar/'.date('Y/m/d'),'first_public');

                        $imageName = time() . '.' . $file->extension();
                        $path = 'images/' . $imageName;
                        $file->move( public_path( 'images' ), $imageName );
                        if ($path) {
                            $data[$key] = $path;
                        }


                    }
                }
            }

            $updateData = DB::table( $this->table )->where( 'id', $id )->update( $data );
            if ($updateData) {
                if (!empty( $this->callback_after_update_attr )) {
                    $this->called_class->{$this->callback_after_update_attr}( $updateData, $request );
                }
                return $this->response(
                    true,
                    200,
                    __( 'Data Update successfully' ),
                    [
                        'url' => route( $this->route_name ) . '?func=index'
                    ]
                );

            } else {
                return $this->response(
                    false,
                    200,
                    __( 'You have not update any thing' )
                );
            }
        } catch (\Exception $exception) {
            return $this->response(
                false,
                11001,
                $exception->getMessage()
            );
        }

    }

    protected
    function response($status, $code = '200', $message = 'Done', $data = []): array
    {
        return [
            'status' => $status,
            'code' => $code,
            'message' => $message,
            'data' => $data
        ];
    }

    private
    function destroy($id)
    {
        $this->check_actions( 'delete' );
        DB::table( $this->table )->where( 'id', $id )->delete();
        return $this->response(
            true,
            200,
            __( 'You have not delete this record' )
        );
    }

    public
    function ValidationError($validation, $message)
    {
        $errorArray = $validation->errors()->messages();

        $data = array_column( array_map( function ($key, $val) {
            return ['key' => $key, 'val' => implode( '|', $val )];
        }, array_keys( $errorArray ), $errorArray ), 'val', 'key' );
        return [
            'status' => false,
            'msg' => implode( "\n", array_flatten( $errorArray ) ),
            'data' => $data
        ];

    }
}
