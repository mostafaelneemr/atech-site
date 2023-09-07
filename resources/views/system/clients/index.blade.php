@extends('system.layout')

@section('style')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle'.direction().'.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

           @include('system.message')

            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Image</label>
                            <label id="projectinput5" class="file center-block">
                                <input type="file" id="file" name="image" onChange="imageUrl(this)" required>
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                            <img src="" id="image" >
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="la la-check-square-o"></i>save</button>
                        </div>
                    </form>
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Publish</th>
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
                ajax: "{{ Route('clients.index', ['datatable' => true]) }}",
                columns: [
                    {data: 'image',},
                    {data: 'is_publish',},
                    {data: 'action',},
                ],
            });

        });
    </script>


    <script type="text/javascript">
        function deleteClient($routeName,$reload){

            if(!confirm("Do you want to delete this Image Client?")){ return false; }

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

    <script type="text/javascript">
        function imageUrl(input) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e){
                    $('#image').attr('src',e.target.result).width(100).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

@push('js')
@endpush
