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
                            <th>Title</th>
                            <th>Description</th>
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
            ajax: "{{ Route('our-activities.index', ['datatable' => true]) }}",
            columns: [
                {data: 'title',},
                {data: 'desc',},
                {data: 'action',},
            ],
        });

    });
</script>

<script type="text/javascript">
    function deleteactivitie($routeName,$reload){

        if(!confirm("Do you want to delete this Activitie?")){ return false; }

        if($reload == undefined){ $reload = 3000; }
        addLoading();

        $.post(
            $routeName,
            {
                '_method':'DELETE',
                '_token':$('meta[name="csrf-token"]').attr('content')
            },
            function(response){
                removeLoading();
                if(isJSON(response)){
                    $data = response;
                    if($data.status == true){
                        toastr.success($data.message, 'Success !', {"closeButton": true});
                        $('#datatable').DataTable().ajax.reload();
                    }else{
                        toastr.error($data.message, 'Error !', {"closeButton": true});
                    }
                }
            }
        )
    }
</script>
@endsection

@push('js')

@endpush
