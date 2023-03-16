
<!--begin::Main-->

@include('partials._header-mobile')
<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
<style>
    :root{
        --col-particle: white;
        --col-particle-stroke: white;
        --col-particle-stroke-hover: black;
    }

    .headerBackground{
        background: #2C5AA0 !important;
        position: absolute;
        width: 100vw;
        left: 0px;
        top: 0px;
        height: 35vh;
        z-index: -1;

        overflow-y: hidden;
    }

    .tab-content{
        background: white;
        padding: 20px;

		border-top-right-radius: 20px;
		border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;
    }

    button.tabBewe{
        background: gray !important;
        color: white !important;
        border-radius: 0px !important;

        padding: 1rem 3rem !important;
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;

        font-size: 17px !important;
        font-weight: 900 !important;
    }
    button.tabBewe.active{
        background: white !important;
        color: black !important;
    }
</style>
<div class="d-flex flex-column flex-root">

	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">

		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

			@include('partials._header')
			<!--[html-partial:include:{"file":"partials/_header.html"}]/-->

			<!--begin::Content-->
			<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

				<!--[html-partial:include:{"file":"partials/_subheader.html"}]/-->

				<!--Content area here-->
				<div class="headerBackground">
					<canvas id="particles" style="width: 100%; height: auto;"></canvas>
				</div>
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