@extends('index')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid mt-10" id="kt_content">
    <div class="subheader py-2 py-lg-12  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->

                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">
                        Settings Monilog </h2>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                            Monilog </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                            Settings </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->

            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Email Settings-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">Iqionly</a>
                                    <div class="text-muted">Admin</div>
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">rizky@kabayan.id</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Phone:</span>
                                    <span class="text-muted">+62 81 2223 35342</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="font-weight-bold mr-2">Location:</span>
                                    <span class="text-muted">Frog Chin</span>
                                </div>
                            </div>
                            <!--end::Contact-->
                            <!--begin::Nav-->
                            <!--end::Subheader-->
                            <ul class="navi navi-hover navi-active navi-accent navi-link-rounded-lg">
                                <li class="navi-item">
                                    <a class="navi-link active" href="#">
                                        <span class="navi-icon"><i class="flaticon2-pie-chart-2"></i></span>
                                        <span class="navi-text">API</span>
                                        <span class="label label-light-danger font-weight-bold label-inline">new</span>
                                    </a>
                                </li>
                                {{-- <li class="navi-item">
                                    <a class="navi-link" href="#">
                                        <span class="navi-icon"><i class="flaticon2-pie-chart-2"></i></span>
                                        <span class="navi-text">Settings</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a class="navi-link" href="#">
                                        <span class="navi-icon"><i class="flaticon2-box-1"></i></span>
                                        <span class="navi-text">Tasks</span>
                                        <span class="navi-label">
                                            <span class="label label-warning label-rounded">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a class="navi-link" href="#">
                                        <span class="navi-icon"><i class="flaticon2-file"></i></span>
                                        <span class="navi-text">Orders</span>
                                    </a>
                                </li> --}}
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Configuration</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change your {{ ucwords(env('APP_NAME')) }} Settings</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-info mr-2 btn-sync">Sync Now</button>
                                <button type="submit" class="btn btn-success mr-2" form="form-settings">Save Changes</button>
                                {{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form" action="{{ route('settings.update') }}" method="post" id="form-settings">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">API Account MyTalent:</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Email</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input name="_email" type="email" class="form-control" placeholder="Enter Email" value="{{ $settings->email ?? null }}" />
                                        <span class="form-text text-muted">Do not share this token to anyone.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-icon input-icon-right">
                                            <input name="_password" type="password" class="form-control" placeholder="Enter Password" value="{{ $settings->password ?? null }}" />
                                            <span><i class="icon-md text-dark-50 ki ki-hide ki-eye" id="togglePassword"></i></span>
                                        </div>
                                        <span class="form-text text-muted">Do not share this token to anyone.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Amount Weeks in Dashboard</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input name="_get_weeks" type="number" class="form-control" placeholder="Enter Weeks in number" value="{{ $settings->get_weeks ?? null }}" />
                                        <span class="form-text text-muted">Change if you want how many weeks to diplay. If you want all type 0 values.</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Token MyTalent:</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">API Token</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input name="_bt" type="text" class="form-control" value="{{ $settings->token_api ?? null }}" placeholder="Enter Bearer Token Manual" disabled />
                                        <span class="form-text text-muted">Do not share this token to anyone.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Clock Server</label>
                                    <div class="col-lg-9 col-xl-6 d-flex">
                                        <span class="align-self-center text-muted" id="time"></span>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Enable Schedule API</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <span class="switch switch-sm">
                                            <label>
                                                <input type="checkbox" name="_schedule_api_on" {{ $settings && $settings->enable_schedule_api == 'on' ? 'checked' : '' }} />
                                                <span></span>
                                            </label>
                                        </span>
                                        @php
                                        if($settings && isset($settings->sync_try)) {
                                            $end = count($settings->sync_try)-1;
                                            if($end < 0) { 
                                                $dates="N/A" ; 
                                            } else { 
                                                $carbon = \Carbon\Carbon::parse($settings->sync_try[$end]['retry_date']->toDateTime()->format('Y-m-d H:i:s'));
                                                $dates = $carbon->addHours(3)->format('Y-m-d H:i:s');
                                            }
                                        } else {
                                            $dates = "N/A";
                                        }
                                        @endphp

                                            <span class="form-text text-muted">This will disable if schedule not retrieve any document 10 times. Don't worry, this will on in {{ $dates }}, Timezone: {{ Config::get('app.timezone')}}</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">API URL MyTalent:</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">API URL</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input name="_url_api" type="text" class="form-control" value="{{ $settings->url_api ?? 'https://mytalent.ioh.co.id/api' }}" placeholder="Enter API URL MyTalent" />
                                        <span class="form-text text-danger">Required Field</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Log URL</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input name="_url_log" type="text" class="form-control" value="{{ $settings->url_log ?? 'https://mytalent.ioh.co.id/' }}" placeholder="Enter Log URL" />
                                        <span class="form-text text-danger">Required Field</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Employee URL</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <input name="_url_emp" type="text" class="form-control" value="{{ $settings->url_employee ?? 'https://mytalent.ioh.co.id/' }}" placeholder="Enter Employee URL" />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-info btn-sync-employee">Sync Now</button>
                                            </div>
                                        </div>
                                        <span class="form-text text-danger">Required Field</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">User URL</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <input name="_url_usr" type="text" class="form-control" value="{{ $settings->url_user ?? 'https://mytalent.ioh.co.id/' }}" placeholder="Enter User URL" />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-info btn-sync-user">Sync Now</button>
                                            </div>
                                        </div>
                                        <span class="form-text text-danger">Required Field</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Log Sync Retry:</h5>
                                    </div>
                                </div>

                                @forelse($settings->sync_try ?? [] as $key => $value)
                                <div class="form-group row mb-1">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-danger text-left text-lg-right p-0">Retry: {{ $value['retry'] }}</label>
                                    <div class="col-lg-9 col-xl-6 d-flex">
                                        <span class="align-self-center">Date Executed: {{ $value['retry_date']->toDateTime()->format('Y-m-d H:i:s') }} UTC</span>
                                    </div>
                                </div>
                                @empty
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right"></label>
                                    <div class="col-lg-9 col-xl-6 d-flex">
                                        <span class="align-self-center text-muted">--Not Have Any Retry Log--</span>
                                    </div>
                                </div>
                                @endforelse
                                {{-- <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">When To Escalate Emails</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="checkbox-list">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" />
                                                <span></span>Upon new order</label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" />
                                                <span></span>New membership approval</label>
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>Member registration</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Updates From Keenthemes:</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Email You With</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>News about Keenthemes products and feature updates</label>
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>Tips on getting more out of Keen</label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>Things you missed since you last logged into Keen</label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>News about Metronic on partner products and other services</label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>Tips on Metronic business products</label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </form>
                        <!--end::Form-->

                        <div class="card-footer justify-content-end text-right">
                            <button type="button" class="btn btn-info mr-2 btn-sync">Sync Now</button>
                            <button type="submit" class="btn btn-success mr-2" form="form-settings">Save Changes</button>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Email Settings-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('scripts')
<script>
    const urlSync = "{{ route('settings.sync') }}";
    const urlSyncEmp = "{{ route('settings.sync-employee') }}";
    const urlSyncUsr = "{{ route('settings.sync-user') }}";

    $('.btn-sync').click(function() {
        KTApp.block('body');
        $.ajax({
            url: urlSync
            , method: 'post'
            , data: {
                '_start_date': '2023-02-06'
                , '_end_date': '2023-02-07'
            }
            , success: () => {
                KTApp.unblock('body')
            }
            , error: function(response) {
                Swal.fire({
                    title: response.responseJSON.message
                })
            }
            , complete: () => {
                KTApp.unblock('body')
            }
        });
    });
    $('.btn-sync-employee').click(function() {
        KTApp.block('body');
        $.ajax({
            url: urlSyncEmp
            , method: 'post'
            , success: () => {
                KTApp.unblock('body')
            }
            , error: function(response) {
                Swal.fire({
                    title: response.responseJSON.message
                })
            }
            , complete: () => {
                KTApp.unblock('body')
            }
        });
    });
    $('.btn-sync-user').click(function() {
        KTApp.block('body');
        $.ajax({
            url: urlSyncUsr
            , success: () => {
                KTApp.unblock('body')
            }
            , error: function(response) {
                Swal.fire({
                    title: response.responseJSON.message
                })
            }
            , complete: () => {
                KTApp.unblock('body')
            }
        });
    });
    $('#togglePassword').click(function() {
        // Toggle the type attribute using
        // getAttribure() method
        const type = $('[name="_password"]')
            .attr('type') === 'password' ?
            'text' : 'password';

        $('[name="_password"]').attr('type', type);

        // Toggle the eye and bi-eye icon
        this.classList.toggle('ki-eye');
    })

    // Class definition
    var KTProfile = function() {
        // Elements
        var avatar;
        var offcanvas;

        // Private functions
        var _initAside = function() {
            // Mobile offcanvas for mobile mode
            offcanvas = new KTOffcanvas('kt_profile_aside', {
                overlay: true
                , baseClass: 'offcanvas-mobile',
                //closeBy: 'kt_user_profile_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });
        }

        var _initForm = function() {
            avatar = new KTImageInput('kt_profile_avatar');
        }

        return {
            // public functions
            init: function() {
                _initAside();
                _initForm();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTProfile.init();

        var time = $('#time');

        function clock() {
            var date = new Date().toUTCString().replace('GMT', 'UTC');
            time.html(date);
        }

        setInterval(clock, 1000);
    });

</script>
@endsection
