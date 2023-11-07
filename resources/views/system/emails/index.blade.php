@extends('system.layout')

@section('style')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('system.message')

            <div class="card">  

                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover fixTableHead">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>From</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>

    <script type="text/javascript">
        $(function () {

            $datatable = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                order: [
                    [0, "DESC"],
                ],
                "pageLength": 10,
                ajax: "{{ Route('get.messages', ['datatable' => true]) }}",
                columns: [
                    {data: 'name',},
                    {data: 'email',},
                    {data: 'phone',},
                    {data: 'message',},
                    {data: 'created_at',},
                    {data: 'action',},
                ],
            });

        });
    </script>

    <script type="text/javascript">
        function deleteMessage($routeName,$reload){

            if(!confirm("Do you want to delete this Message?")){ return false; }

            if($reload == undefined){ $reload = 3000; }
            addLoading();

            $.post(
                $routeName,
                {
                    '_method':'POST',
                    '_token':$('meta[name="csrf-token"]').attr('content'),
                },
                function(response){
                    removeLoading();
                    if(response){
                       var $data = response;
                        if($data.status == true){
                            toastr.success($data.message, 'Success !', {"closeButton": true});
                            $('#datatable').DataTable().ajax.reload();
                            $('#'+$data.id).remove();
                        }else{
                            toastr.error($data.message, 'Error !', {"closeButton": true});
                        }
                    }
                }
            )
        }
    </script>
@endsection
