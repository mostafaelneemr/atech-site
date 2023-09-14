
	<!--begin::Header-->
	<div id="kt_header" class="header header-fixed">

		<!--begin::Container-->
		<div class="container-fluid d-flex align-items-stretch justify-content-between">

			<!--begin::Header Menu Wrapper-->
			<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
				<!--begin::Header Menu-->

				<!--end::Header Menu-->
			</div>
			<!--end::Header Menu Wrapper-->

			<!--begin::Topbar-->
			<div class="topbar">

				<!--begin::Search-->
				<div class="dropdown" id="kt_quick_search_toggle">

					<!--begin::Toggle-->
					<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
						<div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
							<span class="svg-icon svg-icon-xl svg-icon-primary">

								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
								{{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
								{{-- 	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
								{{-- 		<rect x="0" y="0" width="24" height="24" />--}}
								{{-- 		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
								{{-- 		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />--}}
								{{-- 	</g>--}}
								{{-- </svg>--}}
								<!--end::Svg Icon-->

							</span>
						</div>
					</div>

					<!--end::Toggle-->

					<!--begin::Dropdown-->
					<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
						<!--[html-partial:include:{"file":"partials/_extras/dropdown/search-dropdown.html"}]/-->
					</div>
					<!--end::Dropdown-->
				</div>

				<!--end::Search-->
                <div class="topbar-item">
                	<input type="text" class="form-control" placeholder="Search..." />
                </div>

				<!--begin::Notifications-->
				<div class="topbar-item">
					<div class="btn btn-icon btn-icon-mobile btn-clean btn-lg mr-1 pulse pulse-primary" id="kt_quick_notifications_toggle">
						<span class="svg-icon svg-icon-xl svg-icon-primary">

							<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
									<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
								</g>
							</svg> <!--end::Svg Icon-->

						</span>
						<span class="pulse-ring"></span>
					</div>
				</div> <!--end::Notifications-->

				<!--begin::Quick Actions-->
				{{-- <div class="topbar-item">
					<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" id="kt_quick_actions_toggle">
						<span class="svg-icon svg-icon-xl svg-icon-primary">

							<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
									<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
									<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
									<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
								</g>
							</svg> <!--end::Svg Icon-->

						</span>
					</div>
				</div> --}}
				
				
				
				<div class="topbar-item">
					<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" >
						<span class="svg-icon svg-icon-xl svg-icon-primary">
							<a href="{{ route('home')}}" target="_blank">
								<span class="svg-icon svg-icon-primary svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"/>
											<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="9"/>
											<path d="M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z" fill="#000000" opacity="0.3"/>
										</g>
									</svg><!--end::Svg Icon-->
								</span>
							
							</a>
						</span>
					</div>
				</div><!--end::Quick Actions-->


				



				<!--begin::Languages-->
				{{-- <div class="dropdown">

                    @if(lang() == 'ar')
					<!--begin::Toggle-->
					<div onclick="window.location.replace('{{route("system.dashboard",["language"=>"en","backByLanguage"=>"true"])}}')" class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
						<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
							<img class="h-20px w-20px rounded-sm" src="{{asset('assets/media/svg/flags/226-united-states.svg')}}" alt="" />
						</div>
					</div>
                    @else

                            <div onclick="window.location.replace('{{route("system.dashboard",["language"=>"ar","backByLanguage"=>"true"])}}')" class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                    <img class="h-20px w-20px rounded-sm" src="{{asset('assets/media/svg/flags/008-saudi-arabia.svg')}}" alt="" />
                                </div>
                            </div>

                        @endif
					<!--end::Toggle-->

					<!--begin::Dropdown-->


					<!--end::Dropdown-->
				</div> --}}

				<!--end::Languages-->

				<!--begin::User-->
				<div class="topbar-item">
					<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
						<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">{{__('Hi,')}}</span>
						<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{$auth->Fullname}}</span>
						<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
							<span class="symbol-label font-size-h5 font-weight-bold">{{strtoupper(substr($auth->Fullname,0,1))}}</span>
						</span>
					</div>
				</div> <!--end::User-->

			</div> <!--end::Topbar-->

		</div> <!--end::Container-->

	</div> <!--end::Header-->
