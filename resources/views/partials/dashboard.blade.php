<!--begin::Row-->
<div class="row g-5 g-xl-8 g-2">
    <div class="col-lg-6">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">
                    <span class="card-label fw-bold fs-3 mb-1">Popular URL</span>
                    <span class="text-muted fw-semibold fs-7">(A Week)</span>
                </h3>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ki ki-bold-more-ver"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <!--begin::Naviigation-->
                            <ul class="navi">
                                <li class="navi-header font-weight-bold py-5">
                                    <span class="font-size-lg">Add New:</span>
                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                </li>
                                <li class="navi-separator mb-3 opacity-70"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                        <span class="navi-text">Order</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="navi-icon flaticon2-calendar-8"></i></span>
                                        <span class="navi-text">Members</span>
                                        <span class="navi-label">
                                            <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="navi-icon flaticon2-telegram-logo"></i></span>
                                        <span class="navi-text">Project</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="navi-icon flaticon2-new-email"></i></span>
                                        <span class="navi-text">Record</span>
                                        <span class="navi-label">
                                            <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-separator mt-3 opacity-70"></li>
                                <li class="navi-footer pt-5 pb-4">
                                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>
                            <!--end::Naviigation-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-0">
                @php
                $svg = [
                'assets/media/svg/misc/001-recycling.svg',
                'assets/media/svg/misc/002-eolic-energy.svg',
                'assets/media/svg/misc/003-puzzle.svg',
                'assets/media/svg/misc/004-retweet.svg',
                'assets/media/svg/misc/005-bebo.svg',
                'assets/media/svg/misc/006-plurk.svg',
                'assets/media/svg/misc/007-disqus.svg',
                'assets/media/svg/misc/008-infography.svg',
                'assets/media/svg/misc/009-hot-air-balloon.svg'
                ]
                @endphp
                @foreach($url_access_chart as $key => $value)
                <!--begin::Item-->
                <div class="d-flex align-items-center flex-wrap mb-8" data-popular="{{$key}}">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                            <img src="{{ asset($svg[rand(0,8)])}}" class="h-50 align-self-center" alt="{{ $value->_id }}">
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column w-100 text-wrap flex-grow-1 mr-2">
                        <a href="{{ $value->id }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" alt="{{ $value->id }}">{{ strlen($value->_id) > 50 ? substr($value->_id,0,50)."..." : $value->_id; }}</a>
                        <span class="text-muted font-weight-bold">{{ count($value->list_users) > 1 ? count($value->list_users) . ' User Accessed' : $user->full_name ?? 'N/A' }} </span>
                    </div>
                    <!--end::Text-->
                    <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+{{ $value->total > 10000 ? round($value->total/1000, 2) . "K" : $value->total }}</span>
                </div>
                <!--end::Item-->
                @endforeach
            </div>
            <!--end::Body-->
        </div>
    </div>
    @if(!empty($user->user_id) && !empty($user->employee))
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <!--begin::Body-->
            <div class="card-body pt-8">

                <!--begin::User-->
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                        <div class="symbol-label" style="background-image:url('{{ asset('assets/media/users/300_13.jpg') }}')"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div>
                        <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                            {{ $user->full_name }}
                        </a>
                        <div class="text-muted">
                            {{ $user->employee->position_name }}
                        </div>
                    </div>
                </div>
                <!--end::User-->

                <!--begin::Contact-->
                <div class="pt-8 pb-6">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Department:</span>
                        <span class="text-muted">{{ $user->employee->department }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Position Code:</span>
                        <span class="text-muted">{{ $user->employee->position }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">NIK:</span>
                        <span class="text-muted">{{ $user->nik }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Email:</span>
                        <a href="#" class="text-muted text-hover-primary">{{ $user->email }}</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Line Manager:</span>
                        <span class="text-muted">{{ $user->employee->line_manager_name }}</span>
                    </div>
                </div>
                <!--end::Contact-->

                <!--begin::Contact-->
                <div class="pb-6">
                </div>
                <!--end::Contact-->

                <a href="#" class="btn btn-light-success font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Profile Overview
                </a>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    @endif
    <div class="col-lg-6">
        <div class="card card-xl-stretch mb-xl-3">
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">URL Access Graph</span>
                    <span class="text-muted fw-semibold fs-7">Latest trends</span>
                </h3>
            </div>

            <div class="card-body d-flex flex-column">
                <div class="mixed-widget-5-chart card-rounded-top" id="chart-url" data-kt-chart-color="success" style="height: 150px"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card card-xl-stretch mb-xl-3">
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Performance Graph Analyze</span>
                    <span class="text-muted fw-semibold fs-7">Popular</span>
                </h3>
            </div>

            <div class="card-body d-flex flex-column">
                <div class="mixed-widget-5-chart card-rounded-top" id="chart-performance" data-kt-chart-color="success" style="height: 150px"></div>

            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card card-xl-stretch mb-xl-3">
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">MyTalent Access</span>
                    <span class="text-muted fw-semibold fs-7">A Week</span>
                </h3>
            </div>

            <div class="card-body d-flex flex-column">
                <div class="mixed-widget-5-chart card-rounded-top" id="chart-access" data-kt-chart-color="success" style="height: 150px"></div>

            </div>
        </div>
    </div>
</div>
<!--end:Row-->
