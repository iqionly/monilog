<div class="row g-5 g-xl-8">
    <div class="col-xl-12">
        <div class="card card-xl-stretch mb-xl-3">
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Analisis Data Employee</span>
                    <span class="text-muted fw-semibold fs-7">Latest</span>
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
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th class="pr-0" style="width: 50px">authors</th>
                                <th style="min-width: 150px"></th>
                                <th>access at</th>
                                <th style="min-width: 150px">company</th>
                                <th style="min-width: 150px">progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($log_user as $key => $value)
                                <tr>
                                <td class="pr-0">
                                    <div class="symbol symbol-50 symbol-light mt-1">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ ucwords(strtolower($user->full_name)) }}</a>
                                    <span class="text-muted font-weight-bold text-muted d-block">{{ $user->nik }}</span>
                                </td>
                                <td>
                                    {{ $value->created_at }}
                                </td>
                                <td style="max-width: 400px;">
                                    <span class="text-secondary font-weight-bold">
                                        {{ $value->url_access }}
                                    </span>
                                </td>
                                <td style="max-width: 300px;">
                                    <code class="text-wrap">{{ $value->data }}</code>
                                </td>
                            </tr>    
                            @empty
                            <tr>
                                <td></td>
                                <td></td>
                                <td>-- User Not Have Log Yet, or Select Another User--</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
