@extends('main')

@section('content')
<!--start:Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="d-flex justify-content-center mb-5">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-top: -25px;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class='bx bxs-category-alt bx-sm me-2'></i>
                        <span class="fw-bold">Overview</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="analytic-table-tab" data-bs-toggle="pill" data-bs-target="#analytic-table" type="button" role="tab" aria-controls="analytic-table" aria-selected="false">
                        <i class='bx bxs-bar-chart-alt-2 bx-sm me-2'></i>
                        <span class="fw-bold">Analytic Table</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="log-data-tab" data-bs-toggle="pill" data-bs-target="#log-data" type="button" role="tab" aria-controls="log-data" aria-selected="false">
                        <i class='bx bx-library bx-sm me-2'></i>
                        <span class="fw-bold">Log Data</span>
                    </button>
                </li>

            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                @include('partials.dashboard')
            </div>

            <div class="tab-pane fade" id="analytic-table" role="tabpanel" aria-labelledby="analytic-table-tab" tabindex="0">
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-12">
                        <div class="card card-xl-stretch mb-xl-3">
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Data Lowongan Kerja Di
                                        Indonesia</span>
                                    <span class="text-muted fw-semibold fs-7">Latest trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-success btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span>
                                            Download
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body d-flex flex-column">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>NAMA PERUSAHAAN</td>
                                            <td>NAMA PEKERJAAN</td>
                                            <td>LOKASI</td>
                                            <td>SUMBER</td>
                                            <td>ACTION</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="log-data" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-12">
                        <div class="card card-xl-stretch mb-xl-3">
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Data Lowongan Kerja Di
                                        Indonesia</span>
                                    <span class="text-muted fw-semibold fs-7">Latest trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-success btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span>
                                            Download
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body d-flex flex-column">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>NAMA PERUSAHAAN</td>
                                            <td>NAMA PEKERJAAN</td>
                                            <td>LOKASI</td>
                                            <td>SUMBER</td>
                                            <td>ACTION</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="analytic-table" role="tabpanel" aria-labelledby="analytic-table-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="log-data" role="tabpanel" aria-labelledby="log-data-tab" tabindex="0">...</div>
        </div>
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
@endsection
