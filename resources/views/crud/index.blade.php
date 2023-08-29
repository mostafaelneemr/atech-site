@extends('system.layout')
@section('header')
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
                            <label>{{__('Type')}}</label>
                            {!! Form::select('type',[''=>__('All'),'user'=>__('User'),'driver'=>__('Driver')],null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            <label>{{__('Cost Type')}}</label>
                            {!! Form::select('cost_type',[''=>__('All'),'fixed'=>__('Fixed'),'other'=>__('Other')],null,['class'=>'form-control']) !!}
                        </div>
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
@section('footer')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        $(function() {

                    @if(strpos(url()->full(),"?"))
            var extra_url = '&isDataTable=true';
                    @else
            var extra_url = '?isDataTable=true';
            @endif

            $datatable =   $('#datatable-main').DataTable({

                @if(!empty($sort_column))
                rowReorder: true,
                "order": [[ '{{$sort_index}}', "asc" ]],
                @endif

                "pageLength": 100,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{!! url()->full() !!}'+extra_url,
                aoColumns: [
                        @foreach($js_columns as $key=> $row)
                        @if($key == 'action')
                    {
                        data: "{{$key}}", name: "{{$row}}", orderable: false, searchable: false
                    },
                        @else
                    {
                        data: "{{$key}}", name: "{{$row}}"
                    },
                    @endif
                    @endforeach
                ],

                buttons: [
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: {{json_encode($export_array_index)}}
                        }
                    },


                ]
            });

            @if(!empty($sort_column))
            $datatable.on( 'row-reorder', function (e, details) {

                if(details.length) {
                    let rows = [];
                    details.forEach(element => {
                        console.log(element)
                        rows.push({
                            old: $datatable.row(element.node).data()['id'],
                            sort: element.newPosition
                        });
                    });
                    console.log(rows)

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        url: "{{ route($route_name).'?func=sort' }}",
                        data: { rows }
                    }).done(function () { $datatable.ajax.reload() });
                }
            });
            @endif


            $("#ExportReporttoExcel").on("click", function() {
                $datatable.button( '.buttons-excel' ).trigger();
            });

        });
        function filterFunction($this,downloadExcel = false){

            if(downloadExcel == false) {
                $url = '{{url()->full()}}?&isDataTable=true&'+$this.serialize();
                $datatable.ajax.url($url).load();
                $('#filter-modal').modal('hide');
            }else{
                $url = '{{url()->full()}}&isDataTable=true&'+$this.serialize()+'&downloadExcel='+downloadExcel;
                window.location = $url;
            }

        }

    </script>
@endsection

