@extends('system.layout')


@section('style')
    <style>
        .body {
            margin: 0;
            font-size: 1rem;
            display: flex;
            flex: 1;
            min-height: 60vh;
            align-items: center;
        }

        .clock {
          width: 35rem;
          height: 35rem;
          border-radius: 50%;
          margin: 50px auto;
          position: relative;
          background-color: #fff;
          padding: 2rem;
          box-shadow: 0 0 20px #444;
          position: relative;
          background-image: url('https://i.ibb.co/4SDZSL4/clock.jpg');
          background-position: center;
          background-size: cover;
        }

        .clock::after {
          content: '';
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          width: 3%;
          height: 3%;
          background-color: #000;
          border-radius: 50%;
        }

        .clock-face {
          display: flex;
          align-items: center;
          justify-content: center;
          position: relative;
          width: 100%;
          height: 100%;
        }

        .hand {
          width: 50%;
          height: 6px;
          background: black;
          position: absolute;
          transform-origin: 50% 100%;
        }

        .hour-hand {
          width: 3px;
          height: 0;
          border-left: 3px solid transparent;
          border-right: 3px solid transparent;
          border-bottom: 100px solid black;
          background-color: transparent;
          top: 21%;
        }

        .min-hand {
          width: 3px;
          height: 0;
          border-left: 3px solid transparent;
          border-right: 3px solid transparent;
          border-bottom: 180px solid black;
          background-color: transparent;
          left: 48%;
          top: -1.5%;
        }
      
        .second-hand {
          width: 1px;
          height: 0;
          border-left: 1px solid transparent;
          border-right: 1px solid transparent;
          border-bottom: 180px solid black;
          background-color: transparent;
          top: -1%;
          left: 50%;
        }
    </style>
@endsection


@section('content')
    <!--begin::Row-->
    <div class="card card-custom gutter-b">

        <div class="card-body d-flex flex-column">

            {{-- clock at dashboard --}}
            <div class="body">
                <div class="clock">
                    <div class="clock-face">
                      <div class="hand hour-hand"></div>
                      <div class="hand min-hand"></div>
                      <div class="hand second-hand"></div>
                    </div>
                  </div>
            </div>


            <div class="mt-12 mb-5">
                <div class="row row-paddingless mb-10">

                    <!--begin::Item-->
                    {{-- <div class="col" style="max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-check text-success mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$drivers}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Active Driver')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}
                    <!--end::Item-->
                        
                    <!--begin::Item-->
                    {{-- <div class="col" style="max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-clock text-info mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$driver_requests}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Drver Requests')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}
                    <!--end::Item-->
                
                {{-- <div class="col" style="max-width: 20%;">
                    <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-times text-danger mr-5"></i>
                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$in_active_drivers}}</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('In Active Driver')}}</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div> --}}
                
                {{-- <div class="col" style="max-width: 20%;">
                    <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-astronaut text-primary mr-5"></i>
                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$availabel_drivers}}</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Availabel Driver')}}</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div> --}}
                
                {{-- <div class="col" style="max-width: 20%;">
                    <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-user-slash text-warning  mr-5"></i>
                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$unavailabel_drivers}}</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Un Availabel Driver')}}</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div> --}}

            
                </div>
            </div>                    
                                    
            <div class="mt-12 mb-5">
               <div class="row row-paddingless mb-10">
            
                    {{-- <div class="col" style="max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-store-alt text-success mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$vendors}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Active Vendors')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}
            
                    {{-- <div class="col" style="max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 50px" class="la la-store text-info mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$vendor_requests}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Vendor Requests')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}
            
                    {{-- <div class="col" style="max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 40px" class="fas fa-store-alt-slash text-danger mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$in_active_vendors}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('In Active Vendors')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}
            
                    {{-- <div class="col" style="max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 40px" class="flaticon-users-1 text-success mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$users}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Active Users')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}


                    {{-- <div class="col" style="    max-width: 20%;">
                        <div class="d-flex align-items-center mr-2"><i style="font-size: 40px" class="flaticon-users text-info mr-5"></i>
                            <!--begin::Title-->
                            <div>
                                <div class="font-size-h4 text-dark-75 font-weight-bolder">{{$users_not_verify}}</div>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{__('Users Not Verify')}}</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div> --}}
                
               </div>
            </div>

            <div class="mt-12 mb-5">
                <div class="row row-paddingless mb-10">
                </div>
            </div>

       </div>
   </div>
    <!--end::Items-->
    </div>
    </div>


                {{-- <div class="row">--}}
                {{--     <h2>{{__('Orders Status')}}</h2>--}}
                {{-- </div>--}}
                {{-- <div class="row">--}}
                {{--     <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--         <!--begin::Portlet-->--}}
                {{--         <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--             <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--                 <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                     <div class="k-widget-3__content">--}}
                {{--                         <div class="k-widget-3__content-info">--}}
                {{--                             <div class="k-widget-3__content-section">--}}
                {{--                                 <div class="k-widget-3__content-title">--}}
                {{--                                     <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                     {{__('New')}}--}}
                {{--                                 </div>--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                         <div class="k-widget-3__content-info">--}}

                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$new_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}
                {{-- <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--     <!--begin::Portlet-->--}}
                {{--     <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--         <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--             <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                 <div class="k-widget-3__content">--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <div class="k-widget-3__content-title">--}}
                {{--                                 <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                 {{__('Assigned')}}--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                     <div class="k-widget-3__content-info">--}}

                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$assigned_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}
                {{-- <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--     <!--begin::Portlet-->--}}
                {{--     <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--         <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--             <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                 <div class="k-widget-3__content">--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <div class="k-widget-3__content-title">--}}
                {{--                                 <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                 {{__('Accepted')}}--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$accepted_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}
                {{-- <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--     <!--begin::Portlet-->--}}
                {{--     <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--         <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--             <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                 <div class="k-widget-3__content">--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <div class="k-widget-3__content-title">--}}
                {{--                                 <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                 {{__('Collected')}}--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                     <div class="k-widget-3__content-info">--}}

                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$collected_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}
                {{-- <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--     <!--begin::Portlet-->--}}
                {{--     <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--         <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--             <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                 <div class="k-widget-3__content">--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <div class="k-widget-3__content-title">--}}
                {{--                                 <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                 {{__('Delivered')}}--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                     <div class="k-widget-3__content-info">--}}

                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$delivered_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}
                {{-- <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--     <!--begin::Portlet-->--}}
                {{--     <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--         <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--             <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                 <div class="k-widget-3__content">--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <div class="k-widget-3__content-title">--}}
                {{--                                 <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                 {{__('Returned')}}--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                     <div class="k-widget-3__content-info">--}}

                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$returned_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}
                {{-- <div class="col-lg-3 col-xl-3 order-lg-1 order-xl-1">--}}
                {{--     <!--begin::Portlet-->--}}
                {{--     <div class="k-portlet k-portlet--fit k-portlet--height-fluid">--}}
                {{--         <div class="k-portlet__body k-portlet__body--fluid">--}}
                {{--             <div class="k-widget-3 k-widget-3--brand">--}}
                {{--                 <div class="k-widget-3__content">--}}
                {{--                     <div class="k-widget-3__content-info">--}}
                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <div class="k-widget-3__content-title">--}}
                {{--                                 <i class="k-menu__link-icon flaticon-business"></i>--}}
                {{--                                 {{__('Cancel')}}--}}
                {{--                             </div>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                     <div class="k-widget-3__content-info">--}}

                {{--                         <div class="k-widget-3__content-section">--}}
                {{--                             <span class="k-widget-3__content-number">{{$cancel_orders}}</span>--}}
                {{--                         </div>--}}
                {{--                     </div>--}}
                {{--                 </div>--}}
                {{--             </div>--}}
                {{--         </div>--}}
                {{--     </div>--}}
                {{--     <!--end::Portlet-->--}}
                {{-- </div>--}}


                {{-- </div>--}}


                {{-- <div class="k-portlet k-profile">--}}
                {{--     <div class="k-profile__content">--}}
                {{--         <div class="row">--}}

                {{--             <div class="col-lg-12 col-xl-12 d-none d-sm-block">--}}
                {{--                 <div id="chart_div_counts" style="height: 500px;"></div>--}}
                {{--             </div>--}}


                {{--         </div>--}}
                {{--     </div>--}}
                {{-- </div>--}}

    </div>
    <!-- end:: Content -->

@endsection

@section('script')

    <Script>
        let hr_hand = document.querySelector(".hour-hand");
      let min_hand = document.querySelector(".min-hand");
      let sec_hand = document.querySelector(".second-hand");

      function clock() {
        const date = new Date();
        let hr_cal = (date.getHours()*30) + (date.getMinutes() / 2);
        let min_cal = (date.getMinutes() *6);
        let sec_call = date.getSeconds()*6;
        hr_hand.style.transform = `rotate(${hr_cal}deg)`;
        min_hand.style.transform = `rotate(${min_cal}deg)`;
        sec_hand.style.transform = `rotate(${sec_call}deg)`;
        console.log(hr_cal);
        setTimeout(clock, 1000);
      }
      setTimeout(clock, 1000);
    </Script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawVisualization_counts);

        function drawVisualization_counts() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['{{__('Month')}}', '{{__('Delivered')}}', '{{__('Canceled')}}', '{{__('Returned')}}'],
                    @foreach(range(1,date('m')) as $key => $value)
                    @php
                        $month = (strlen($value) == 1) ? '0'.$value : $value;
                        $year  = date('Y');
                    @endphp
                ['{{$year}}/{{$month}}', {{numDelivered($year,$month)}}, {{numCancel($year,$month)}}, {{numReturned($year,$month)}}],
                @endforeach
            ]);

            var options = {
                title: '{{__('Order Chart')}}',
                vAxis: {title: '{{__('Numbers')}}'},
                hAxis: {title: '{{__('Month')}}'},
                seriesType: 'bars',
                series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div_counts'));
            chart.draw(data, options);
        }
    </script> --}}

@endsection
