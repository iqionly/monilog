
<!--begin::Main-->

@include('partials._header-mobile')
<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
<div class="d-flex flex-column flex-root">

	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">

		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

			@include('partials._header')
			<!--[html-partial:include:{"file":"partials/_header.html"}]/-->

			<!--begin::Content-->
			<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

				<div class="text-center py-5" style="margin-top: 80px;">
                    <h1 class="text-white">SELAMAT DATANG DI DAILY INTERACTIVE ACTIVITY LOG<br>MYTALENT IOH</h1>
                    <p class="text-white">Data Performance Employee di MyTalent</p>
                </div>
				<!--[html-partial:include:{"file":"partials/_subheader.html"}]/-->

				<!--Content area here-->
				@yield('content')
			</div>

			<!--end::Content-->

			@include('partials._footer.compact')
			<!--[html-partial:include:{"file":"partials/_footer/compact.html"}]/-->
		</div>

		<!--end::Wrapper-->
	</div>

	<!--end::Page-->
</div>

<!--end::Main-->