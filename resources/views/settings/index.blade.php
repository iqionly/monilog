@extends('index')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid mt-10" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Email Settings-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-drop"></i>
                                                    </span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-list-3"></i>
                                                    </span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-gear"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-magnifier-tool"></i>
                                                    </span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Toolbar-->
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
                                <h3 class="card-label font-weight-bolder text-dark">API Configuration</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change your API MyTalent</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="reset" class="btn btn-success mr-2">Save Changes</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form">
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
                                        <input type="_email" class="form-control"  placeholder="Enter Email"/>
                                        <span class="form-text text-muted">Do not share this token to anyone.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="_password" class="form-control"  placeholder="Enter Password"/>
                                        <span class="form-text text-muted">Do not share this token to anyone.</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Token MyTalent:</h5>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">API Token</label>
                                    <div class="input-group col-lg-9 col-xl-6">
                                        <input type="_bt" class="form-control"  placeholder="Enter Bearer Token Manual"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">Get!</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-xl-6">
                                        <span class="form-text text-muted">Do not share this token to anyone.</span>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Enable Schedule API</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <span class="switch switch-sm">
                                            <label>
                                                <input type="checkbox" name="_schedule_api_on" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
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
