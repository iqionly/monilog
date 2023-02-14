@extends('index')

@section('content')
<div class="text-center" style="margin-top: 80px;">
    <h1 class="text-white">SELAMAT DATANG DI MONITOR LOG<br>MYTALENT IOH</h1>
    <p class="text-white">Data Performance Employee di MyTalent</p>
</div>

<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
</div>

<!--start:Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="d-flex justify-content-center mb-5">
            <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist" style="margin-top: -25px;">
                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link text-white btn btn-primary active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class='bx bxs-category-alt bx-sm me-2'></i>
                        <span class="fw-bold">Overview</span>
                    </button>
                </li>

                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link text-white btn btn-primary" id="analytic-table-tab" data-toggle="pill" data-target="#analytic-table" type="button" role="tab" aria-controls="analytic-table" aria-selected="false">
                        <i class='bx bxs-bar-chart-alt-2 bx-sm me-2'></i>
                        <span class="fw-bold">Analytic Table</span>
                    </button>
                </li>

                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link text-white btn btn-primary" id="log-data-tab" data-toggle="pill" data-target="#log-data" type="button" role="tab" aria-controls="log-data" aria-selected="false">
                        <i class='bx bx-library bx-sm me-2'></i>
                        <span class="fw-bold">Log Data</span>
                    </button>
                </li>

                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link text-white btn btn-primary" id="user-data-tab" data-toggle="pill" data-target="#user-data" type="button" role="tab" aria-controls="luser-data" aria-selected="false">
                        <i class='bx bx-library bx-sm me-2'></i>
                        <span class="fw-bold">Users Data</span>
                    </button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                @include('partials.dashboard')
            </div>


            <div class="tab-pane fade" id="analytic-table" role="tabpanel" aria-labelledby="analytic-table-tab" tabindex="0">
                @if(!empty($user->user_id))
                    @include('partials.analytic')
                @else
                    <div class="row g-5 g-xl-8">
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center">
                                    <span>Please Select 1 User in Log Data or User Data Tab, with clicking their UserID</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="tab-pane fade" id="log-data" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-12">
                        <div class="card card-xl-stretch mb-xl-3">
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Log Tables</span>
                                    <span class="text-muted fw-semibold fs-7">MyTalent</span>
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
                                <!--begin: Search Form-->
                                {{-- <form class="mb-15">
                                    <div class="row mb-6">
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>UserID:</label>
                                            <input type="text" class="form-control datatable-input" placeholder="E.g: 4590" data-col-index="1" />
                                        </div>
                                    </div>
                                    <div class="row mt-8">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary btn-primary--icon" id="kt_search">
                                                <span>
                                                    <i class="la la-search"></i>
                                                    <span>Search</span>
                                                </span>
                                            </button>&#160;&#160;
                                            <button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
                                                <span>
                                                    <i class="la la-close"></i>
                                                    <span>Reset</span>
                                                </span>
                                            </button>
										</div>
                                    </div>
                                </form> --}}
                                <div class="table-responsive">
                                    <table class="table table-separate table-checkable" style="width:100%!important;" id="log-table">
                                        <thead>
                                            <tr>
                                                <th>Log ID</th>
                                                <th>User ID</th>
                                                <th>URL</th>
                                                <th style="max-width: 300px;">Data</th>
                                                <th>Desc</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="user-data" role="tabpanel" aria-labelledby="pills-user-tab" tabindex="0">
                <div class="card card-xl-stretch mb-xl-3">
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">User Tables</span>
                            <span class="text-muted fw-semibold fs-7">MyTalent</span>
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
                        <div class="table-responsive">
                            <table class="table table-separate table-checkable" style="width:100%!important;" id="user-table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>NIK</th>
                                        <th style="max-width: 300px;">Full Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $value)
                                    <tr>
                                        <td><a href="{{ url('/'.$value->user_id ) }}">{{ $value->user_id }}</a></td>
                                        <td>{{ $value->nik }}</td>
                                        <td>{{ $value->full_name }}</td>
                                        <td>{{ $value->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="analytic-table" role="tabpanel" aria-labelledby="analytic-table-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="log-data" role="tabpanel" aria-labelledby="log-data-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="user-data" role="tabpanel" aria-labelledby="user-data-tab" tabindex="0">...</div>
        </div>
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

@endsection

{{-- @dd($series_data) --}}

@section('scripts')
<script src="assets/js/pages/features/charts/apexcharts.js"></script>
<script>
    const urlLogDataTable = "{{ route('dashboard.log-data') }}"
    const urlGraph2 = "{{ route('dashboard.graph-2') }}";
    const urlGraph3 = "{{ route('dashboard.graph-3') }}";
    $('#pills-tab button').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
    table = $('#log-table').DataTable({
        processing: true
        , serverSide: true
        , searchDelay: 1200
        , ajax: {
            url: urlLogDataTable
        }
        , columns: [{
                data: 'log_mytalent_id'
                , name: 'log_mytalent_id'
            }
            , {
                data: 'user_el'
                , name: 'user_el'
            }
            , {
                data: 'url_access'
                , name: 'url_access'
            }
            , {
                data: 'data'
                , name: 'data'
                , width: '300px'
            }
            , {
                data: 'description'
                , name: 'description'
            }
            , {
                data: 'created_at'
                , name: 'created_at'
            }
            , {
                data: 'updated_at'
                , name: 'updated_at'
            }
        ]
    });

	//var filter = function() {
	//	var val = $.fn.dataTable.util.escapeRegex($(this).val());
	//	table.column($(this).data('col-index')).search(val ? val : '', false, false).draw();
	//};
//
	//var asdasd = function(value, index) {
	//	var val = $.fn.dataTable.util.escapeRegex(value);
	//	table.column(index).search(val ? val : '', false, true);
	//};
//
	//$('#kt_search').on('click', function(e) {
	//	e.preventDefault();
	//	var params = {};
	//	$('.datatable-input').each(function() {
	//		var i = $(this).data('col-index');
	//		if (params[i]) {
	//			params[i] += '|' + $(this).val();
	//		}
	//		else {
	//			params[i] = $(this).val();
	//		}
	//	});
	//	$.each(params, function(i, val) {
	//		// apply search params to datatable
	//		table.column(i).search(val ? val : '', false, false);
	//	});
	//	table.table().draw();
	//});
//
	//$('#kt_reset').on('click', function(e) {
	//	e.preventDefault();
	//	$('.datatable-input').each(function() {
	//		$(this).val('');
	//		table.column($(this).data('col-index')).search('', false, false);
	//	});
	//	table.table().draw();
	//});

    $('#kt_advance_table_widget_1').DataTable({});
    $('#user-table').DataTable({});

    var _demo2 = function() {
        if($('[data-popular]').length === 0) {
            return false;
        }
        $.ajax({
            url: urlGraph2,
            data: {
                url_0: "{{ $url_access_chart[0]->_id ?? 0 }}",
                url_1: "{{ $url_access_chart[1]->_id ?? 0 }}",
                user: {{ $user->user_id ?? "null" }}
            },
            success: function(response) {
                const apexChart = "#chart-url";
                var options = {
                    series: [{
                        name: response['names'][0]
                        , data: response[0]
                    }, {
                        name: response['names'][1]
                        , data: response[1]
                    }]
                    , chart: {
                        height: 350
                        , type: 'area'
                    }
                    , dataLabels: {
                        enabled: false
                    }
                    , stroke: {
                        curve: 'smooth'
                    }
                    , xaxis: {
                        type: 'date'
                        , categories: response[2]
                    }
                    , tooltip: {
                        x: {
                            format: 'dd/MM/yy'
                        }
                    , }
                    , colors: [primary, success]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }
        })
    }

    var _demo3 = function() {
        const apexChart = "#chart-performance";
        var options = {
            series: [{
                name: 'Net Profit'
                , data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue'
                , data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Free Cash Flow'
                , data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }]
            , chart: {
                type: 'bar'
                , height: 350
            }
            , plotOptions: {
                bar: {
                    horizontal: false
                    , columnWidth: '55%'
                    , endingShape: 'rounded'
                }
            , }
            , dataLabels: {
                enabled: false
            }
            , stroke: {
                show: true
                , width: 2
                , colors: ['transparent']
            }
            , xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct']
            , }
            , yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            }
            , fill: {
                opacity: 1
            }
            , tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
            , colors: [primary, success, warning]
        };

        var chart = new ApexCharts(document.querySelector(apexChart), options);
        chart.render();
    }

    var _demo1 = function() {
        $.ajax({
            url: urlGraph3,
            success: function(response) {
                const apexChart = "#chart-access";
                var options = {
                    series: [{
                        name: "Desktops"
                        , data: response.datas
                    }]
                    , chart: {
                        height: 350
                        , type: 'line'
                        , zoom: {
                            enabled: false
                        }
                    }
                    , dataLabels: {
                        enabled: false
                    }
                    , stroke: {
                        curve: 'straight'
                    }
                    , grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        }
                    , }
                    , xaxis: {
                        categories: response.dates
                    , }
                    , colors: [primary]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }
        });
    }

    _demo1();
    _demo2();
    _demo3();

</script>
@endsection
