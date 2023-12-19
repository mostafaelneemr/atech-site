@extends('system.layout')

@section('content')

    <h4 class="text-center text-muted mt-2">{{__('Activate Site Sections')}}</h4>
    <div class="row">

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Brand Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'brand_section')" <?php if (\App\Models\admin\Active_section::where('name', 'brand_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Video Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'video_section')" <?php if (\App\Models\admin\Active_section::where('name', 'video_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Activites Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'activies_section')" <?php if (\App\Models\admin\Active_section::where('name', 'activies_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Project Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'project_section')" <?php if (\App\Models\admin\Active_section::where('name', 'project_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Certificates Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'certificate_section')" <?php if (\App\Models\admin\Active_section::where('name', 'certificate_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Testimonial Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'testimonial_section')" <?php if (\App\Models\admin\Active_section::where('name', 'testimonial_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Team Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'team_section')" <?php if (\App\Models\admin\Active_section::where('name', 'team_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Blogs Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'blog_section')" <?php if (\App\Models\admin\Active_section::where('name', 'blog_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Clients Section')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-primary text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'client_section')" <?php if (\App\Models\admin\Active_section::where('name', 'client_section')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

    </div>

    <h4 class="text-center text-muted mt-2">{{__('Activate Pages ')}}</h4>
    <div class="row">

        <div class="col-lg-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('About Page')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-success text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'about_page')" <?php if (\App\Models\admin\Active_section::where('name', 'about_page')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('service Page')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-success text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'service_page')" <?php if (\App\Models\admin\Active_section::where('name', 'service_page')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Blog Page')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-success text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'blog_page')" <?php if (\App\Models\admin\Active_section::where('name', 'blog_page')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Project Page')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-success text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'project_page')" <?php if (\App\Models\admin\Active_section::where('name', 'project_page')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{__('Career Page')}}</h3>
                </div>

                <div class="form-group row switch switch-outline switch-icon switch-success text-center">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">
                        <input data-switch="1" type="checkbox" onchange="updateSettings(this, 'career_page')" <?php if (\App\Models\admin\Active_section::where('name', 'career_page')->first()->value == 1) echo "checked"; ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-switch.js')}}"></script>

<script type="text/javascript">
    $('.c-preloader').hide();
    function updateSettings(el, type){
        if($(el).is(':checked')){
            var value = 1;
        }
        else{
            var value = 0;
        }
        $.post('{{ route('activation.update') }}', {_token:'{{ csrf_token() }}', name:type, value:value}, function(data){
            if(value == 1){
                toastr.success(data.message, 'Success Active!', {"closeButton": true});
            }
            else{
                toastr.warning(data.message, 'Success DeActive !', {"closeButton": true});
            }
        });
    }

</script>

@endsection