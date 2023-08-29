@extends('system.layout')

@section('header')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle'.direction().'.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('content')

    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label">
                    {{$subject}}
                </h3>
            </div>
            <div class="card-toolbar">
                @if(isset($add_new))
                    <a href="{{url($add_new['route'])}}" class="btn btn-primary mr-3">
                        <i class="fas fa-plus"></i>
                        {{$add_new['text']}} </a>
                @endif

                @if(isset($filter))
                    <a title="{{__('Filter')}}" href="javascript:;" data-toggle="modal"
                       data-target="#filter-modal"
                       class="btn btn-icon btn-outline-primary mr-2">
                        <i class="fas fa-filter"></i></a>
                @endif

                @if(isset($download_excel))
                    <a title="{{__('Download Excel')}}" href="javascript:;"
                       onclick="filterFunction($('#filterForm'),true)"
                       class="btn btn-icon btn-outline-primary mr-2">
                        <i class="flaticon-download-1"></i></a>
                @endif
        </div>
        <div class="card-body">

            <!--begin: Datatable -->
            <table style="text-align: center;" class="table table-bordered table-hover table-checkable table-responsive"
                   id="datatable-main">
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
    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"
            type="text/javascript"></script>
    <script type="text/javascript">

        $(function () {
            $('#example tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            $datatable = $('#datatable-main').DataTable({
                processing: true,
                serverSide: true,
                dataSrc: "",
                mDataProp: "",
                ajax: '{!! url()->full() !!}?isDataTable=true',
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
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: {{json_encode($export_array_index)}}
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: {{json_encode($export_array_index)}}
                        }
                    },
                    'colvis'
                ]

            });
        });

        function filterFunction($this, downloadExcel = false) {

            if (downloadExcel == false) {
                $url = '{{url()->full()}}?&isDataTable=true&' + $this.serialize();
                $datatable.ajax.url($url).load();
                $('#filter-modal').modal('hide');
            } else {
                $url = '{{url()->full()}}?isDataTable=true&' + $this.serialize() + '&downloadExcel=' + downloadExcel;
                window.location = $url;
            }

        }

    </script>
@endsection
