@php
    $careerCount = app\Models\admin\Career::count();
    // dd($careerCount);
@endphp
@extends('system.layout')

@section('style')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle'.direction().'.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @if ($careerCount != 0)
        
    <div class="row">
        <div class="col-md-12">
            @include('system.message')
            
            @foreach ($careers as $career)
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
						<span class="card-icon">
                            <i class="flaticon2-chat-1 text-primary"></i>
						</span>
						<h3 class="card-label">{{ $career->title }}
                            <small>{{ $career->location }}</small>
                        </h3>

                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('careers.edit', $career->id) }}" class="btn btn-sm btn-icon btn-light-info mr-2">
                            <i class="flaticon2-drop"></i>
                        </a>
                        <a class="btn btn-sm btn-icon btn-light-danger" href="javascript:void(0);" onclick="deleteCareer('{{ route('careers.destroy', $career->id) }}')"><i class="text-danger la la-trash"></i></a>
                    </div>
                </div>
				<div class="card-body"> {{ $career->desc }}</div>
			</div>
                <hr>
            @endforeach
        </div>
    </div>
    @else
    <div class="card card-custom">
        <div class="card-body text-center"> Career Position not found</div>
    </div>
    @endif
    
@endsection

@section('script')

<script type="text/javascript">
    function deleteCareer($routeName,$reload){

        if(!confirm("Do you want to delete this Career?")){ return false; }

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
                        // $('#datatable').DataTable().ajax.reload();
                        location.reload();
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
