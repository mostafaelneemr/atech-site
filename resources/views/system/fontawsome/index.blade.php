@extends('system.layout')

@section('content')
    @include('system.message')
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Fontawesome Icons</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($fontawsomes as $fontawsome)
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="{{ $fontawsome->name }}"></i>
                                </div>
                                <div class="text-muted">{{ $fontawsome->name }}</div>
                            </div>
                        </div>
                        @endforeach
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
