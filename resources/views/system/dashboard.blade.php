@extends('system.layout')
@section('content')


    <!--begin::Row-->
    <div class="card card-custom gutter-b">

        <div class="card-body d-flex flex-column">

            <div class="mt-12 mb-5">
                <div class="row row-paddingless mb-10">
            <!--begin::Item-->
{{--            <div class="col" style="    max-width: 20%;">--}}
{{--                <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-check text-success mr-5"></i>--}}
{{--                    <!--begin::Title-->--}}
{{--                    <div>--}}
{{--                        <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$drivers}}</div>--}}
{{--                        <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Active Driver')}}</div>--}}
{{--                    </div>--}}
{{--                    <!--end::Title-->--}}
{{--                </div>--}}
{{--            </div>--}}

            <!--end::Item-->

                    <!--begin::Item-->
{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-clock text-info mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$driver_requests}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Drver Requests')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Item-->--}}

{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-times text-danger mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$in_active_drivers}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('In Active Driver')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-astronaut text-primary mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$availabel_drivers}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Availabel Driver')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-slash text-warning  mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$unavailabel_drivers}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Un Availabel Driver')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div></div>--}}


{{--            <div class="mt-12 mb-5">--}}
{{--                <div class="row row-paddingless mb-10">--}}


{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-store-alt text-success mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$vendors}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Active Vendors')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-store text-info mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$vendor_requests}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Vendor Requests')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 40px" class="fas fa-store-alt-slash text-danger mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$in_active_vendors}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('In Active Vendors')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 40px" class="flaticon-users-1 text-success mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$users}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Active Users')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="col" style="    max-width: 20%;">--}}
{{--                        <div class="d-flex align-items-center mr-2"><i style="font-size: 40px" class="flaticon-users text-info mr-5"></i>--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div>--}}
{{--                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$users_not_verify}}</div>--}}
{{--                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Users Not Verify')}}</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div></div>--}}




{{--            <div class="mt-12 mb-5">--}}
{{--                <div class="row row-paddingless mb-10">--}}











{{--        </div></div>--}}




{{--        </div>--}}
{{--    </div>--}}
{{--    <!--end::Items-->--}}
{{--    </div>--}}

{{--    </div>--}}





{{--        <div class="row">--}}
{{--            <h2>{{__('Orders Status')}}</h2>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('New')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$new_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('Assigned')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$assigned_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('Accepted')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$accepted_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('Collected')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$collected_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('Delivered')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$delivered_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('Returned')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$returned_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
{{--                <!--begin::Portlet-->--}}
{{--                <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
{{--                    <div class="k-portlet__body k-portlet__body--fluid">--}}
{{--                        <div class="k-widget-3 k-widget-3--brand">--}}
{{--                            <div class="k-widget-3__content">--}}
{{--                                <div class="k-widget-3__content-info">--}}
{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <div class="k-widget-3__content-title">--}}
{{--                                            <i class="k-menu__link-icon flaticon-business"></i>--}}
{{--                                            {{__('Cancel')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="k-widget-3__content-info">--}}

{{--                                    <div class="k-widget-3__content-section">--}}
{{--                                        <span class="k-widget-3__content-number">{{$cancel_orders}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Portlet-->--}}
{{--            </div>--}}


{{--        </div>--}}


{{--        <div class="k-portlet k-profile">--}}
{{--            <div class="k-profile__content">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-lg-12 col-xl-12 d-none d-sm-block">--}}
{{--                        <div id="chart_div_counts" style="height: 500px;"></div>--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
    <!-- end:: Content -->


@endsection
@section('footer')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawVisualization_counts);

        {{--function drawVisualization_counts() {--}}
        {{--    // Some raw data (not necessarily accurate)--}}
        {{--    var data = google.visualization.arrayToDataTable([--}}
        {{--        ['{{__('Month')}}', '{{__('Delivered')}}', '{{__('Canceled')}}', '{{__('Returned')}}'],--}}
        {{--            @foreach(range(1,date('m')) as $key => $value)--}}
        {{--            @php--}}
        {{--                $month = (strlen($value) == 1) ? '0'.$value : $value;--}}
        {{--                $year  = date('Y');--}}
        {{--            @endphp--}}
        {{--        ['{{$year}}/{{$month}}', {{numDelivered($year,$month)}}, {{numCancel($year,$month)}}, {{numReturned($year,$month)}}],--}}
        {{--        @endforeach--}}
        {{--    ]);--}}

        {{--    var options = {--}}
        {{--        title: '{{__('Order Chart')}}',--}}
        {{--        vAxis: {title: '{{__('Numbers')}}'},--}}
        {{--        hAxis: {title: '{{__('Month')}}'},--}}
        {{--        seriesType: 'bars',--}}
        {{--        series: {5: {type: 'line'}}--}}
        {{--    };--}}

        {{--    var chart = new google.visualization.ComboChart(document.getElementById('chart_div_counts'));--}}
        {{--    chart.draw(data, options);--}}
        {{--}--}}
    </script>

@endsection
