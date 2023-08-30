@extends('system.layout')

@section('style')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle'.direction().'.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                {!! Form::open(['id'=>'filterForm','onsubmit'=>'filterFunction($(this));return false;','class'=>'k-form']) !!}

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Filter')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb1">
                        <label>{{__('Created At')}}</label>
                        <div class="input-daterange input-group" >
                            {!! Form::text('created_at1',null,['class'=>'form-control datepicker','autocomplete'=>'off']) !!}
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                            </div>
                            {!! Form::text('created_at2',null,['class'=>'form-control datepicker','autocomplete'=>'off']) !!}
                        </div>
                        <span class="form-text text-muted">{{__('Linked pickers for date range selection')}}</span>

                    </div>

                    <div class="form-group row mb1">
                        <div class="col-md-6">
                            <label>{{__('ID')}}</label>
                            {!! Form::number('id',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            <label>{{__('Name')}}</label>
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row mb1">
                        <div class="col-md-6">
                            <label>{{__('E-mail')}}</label>
                            {!! Form::email('email',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            <label>{{__('Mobile')}}</label>
                            {!! Form::text('mobile',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group mb1">
                        <label>{{__('Job Title')}}</label>
                        {!! Form::text('job_title',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group row mb1">
                        <div class="col-md-6">
                            <label>{{__('Gender')}}</label>
                            {!! Form::select('gender',[''=>__('All'),'male'=>__('Male'),'female'=>__('Female')],null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            <label>{{__('Status')}}</label>
                            {!! Form::select('status',[''=>__('All'),'active'=>__('Active'),'in-active'=>__('In-Active')],null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group mb1">
                        <label>{{__('Permission Group')}}</label>
                        {!! Form::select('permission_group_id',[__('All')]+$PermissionGroup,null,['class'=>'form-control']) !!}
                    </div>

                </div>

                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="{{__('Close')}}">
                    <input type="submit" class="btn btn-outline-primary btn-md" value="{{__('Filter')}}">
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!--begin::Row-->
    <div class="card card-custom gutter-b">

                <div class="card-body">


                <!--begin: Datatable -->
                <table style="text-align: center;" class="table table-bordered table-hover table-checkable" id="datatable-main">
                    <thead>
                    <tr>
                        @foreach($tableColumns as $key => $value)
                            <th>{{$value}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        @foreach($tableColumns as $key => $value)
                            <th>{{$value}}</th>
                        @endforeach
                    </tr>
                    </tfoot>
                </table>


    </div>

    <!-- end:: Content Body -->
</div>
<!-- end:: Content -->
@endsection
@section('script')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        $(function() {

            $datatable =   $('#datatable-main').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! url()->full() !!}?isDataTable=true',
                columns: [
                        @foreach($js_columns as $key=> $row)
                        @if($key == 'action')
                    { data: "{{$key}}", name: "{{$row}}",orderable: false,searchable: false},
                        @else
                    { data: "{{$key}}", name: "{{$row}}"},
                    @endif
                    @endforeach
                ]

        });
        });
        function filterFunction($this,downloadExcel = false){

            if(downloadExcel == false) {
                $url = '{{url()->full()}}?&isDataTable=true&'+$this.serialize();
                $datatable.ajax.url($url).load();
                $('#filter-modal').modal('hide');
            }else{
                $url = '{{url()->full()}}?isDataTable=true&'+$this.serialize()+'&downloadExcel='+downloadExcel;
                window.location = $url;
            }

        }

    </script>
@endsection
