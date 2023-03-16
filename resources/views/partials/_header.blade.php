<!--begin::Header-->
<div id="kt_header" class="header  header-fixed ">

    <!--begin::Container-->
    <div class=" container-fluid  d-flex align-items-stretch justify-content-between">

        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">

            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="./">
                    <img alt="Logo" src="{{ asset('assets/images/dialog-white.png') }}" class="logo-default max-h-40px" />
                    <img alt="Logo" src="{{ asset('assets/images/dialog.png') }}" class="logo-sticky max-h-40px" />
                </a>
            </div>

            <!--end::Header Logo-->

            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default ">

                    <!--begin::Header Nav-->
                    <ul class="menu-nav ">
                        <li class="menu-item  menu-item-submenu menu-item-rel" aria-haspopup="true">
							<a href="{{ url('/') }}" class="menu-link">
								<span class="menu-text">Dashboard</span><i class="menu-arrow"></i>
							</a>
                        </li>
                        <li class="menu-item  menu-item-submenu menu-item-rel" aria-haspopup="true">
							<a href="{{ route('settings') }}" class="menu-link">
								<span class="menu-text">Settings</span><span class="menu-desc"></span><i class="menu-arrow"></i>
							</a>
                        </li>
                    </ul>

                    <!--end::Header Nav-->
                </div>

                <!--end::Header Menu-->
            </div>

            <!--end::Header Menu Wrapper-->
        </div>

        <!--end::Left-->

        <!--begin::Topbar-->
        <div class="topbar">

            <!--begin::Search-->
            {{-- <div class="dropdown">

                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
                        <span class="svg-icon svg-icon-xl">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>

                            <!--end::Svg Icon-->
                        </span>
                    </div>
                </div>

                <!--end::Toggle-->

                {{-- <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">

					@include('partials._extras.dropdown.search-dropdown')
                    <!--[html-partial:include:{"file":"partials/_extras/dropdown/search-dropdown.html"}]/-->
                </div>

                <!--end::Dropdown-->
            </div> --}}

            <!--end::Search-->

            <!--begin::User-->
            <div class="dropdown">

                <!--begin::Toggle-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
                        <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">Iqionly</span>
                        <span class="symbol symbol-35">
                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">I</span>
                        </span>
                    </div>
                </div>

                <!--end::Toggle-->
            </div>

            <!--end::User-->
        </div>

        <!--end::Topbar-->
    </div>

    <!--end::Container-->
</div>

<!--end::Header-->