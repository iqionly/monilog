<!DOCTYPE html>

<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Dialog | Daily Interactive Activity Log</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<link rel="canonical" href="{{ env('APP_ENV') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/lock-login.css') }}" rel="stylesheet">
		<!--end::Global Theme Styles-->
		
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

		<style>
			.lock-login{
				width: 100vw;
				height: 100vh;

				/* background: red; */
				position: fixed;
				left: 0px;
				top: 0px;
				z-index: 98;
			}
		</style>
	</head>

	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="page-loading-enabled page-loading quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled aside-enabled aside-static page-loading">

		@include('partials._page-loader')
		<!--[html-partial:include:{"file":"partials/_page-loader.html"}]/-->
		@include('layout')
		<!--[html-partial:include:{"file":"layout.html"}]/-->
		@include('partials._extras.offcanvas.quick-user')
		<!--[html-partial:include:{"file":"partials/_extras/offcanvas/quick-user.html"}]/-->
		@include('partials._extras.offcanvas.quick-panel')
		<!--[html-partial:include:{"file":"partials/_extras/offcanvas/quick-panel.html"}]/-->
		@include('partials._extras.chat')
		<!--[html-partial:include:{"file":"partials/_extras/chat.html"}]/-->
		@include('partials._extras.scrolltop')
		<!--[html-partial:include:{"file":"partials/_extras/scrolltop.html"}]/-->
		<script>
			var HOST_URL = "{{ env('APP_URL') }}";
		</script>

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>
			var KTAppSettings = {
				"breakpoints": {
					"sm": 576,
					"md": 768,
					"lg": 992,
					"xl": 1200,
					"xxl": 1200
				},
				"colors": {
					"theme": {
						"base": {
							"white": "#ffffff",
							"primary": "#6993FF",
							"secondary": "#E5EAEE",
							"success": "#1BC5BD",
							"info": "#8950FC",
							"warning": "#FFA800",
							"danger": "#F64E60",
							"light": "#F3F6F9",
							"dark": "#212121"
						},
						"light": {
							"white": "#ffffff",
							"primary": "#E1E9FF",
							"secondary": "#ECF0F3",
							"success": "#C9F7F5",
							"info": "#EEE5FF",
							"warning": "#FFF4DE",
							"danger": "#FFE2E5",
							"light": "#F3F6F9",
							"dark": "#D6D6E0"
						},
						"inverse": {
							"white": "#ffffff",
							"primary": "#ffffff",
							"secondary": "#212121",
							"success": "#ffffff",
							"info": "#ffffff",
							"warning": "#ffffff",
							"danger": "#ffffff",
							"light": "#464E5F",
							"dark": "#ffffff"
						}
					},
					"gray": {
						"gray-100": "#F3F6F9",
						"gray-200": "#ECF0F3",
						"gray-300": "#E5EAEE",
						"gray-400": "#D6D6E0",
						"gray-500": "#B5B5C3",
						"gray-600": "#80808F",
						"gray-700": "#464E5F",
						"gray-800": "#1B283F",
						"gray-900": "#212121"
					}
				},
				"font-family": "Poppins"
			};
		</script>

		<!--end::Global Config-->

		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->

		<!--begin::Page Vendors(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

		<!--end::Page Vendors-->

		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/easing/EasePack.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
		<script src="{{ asset('js/custom.js')}}"></script>

		<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.extend(true, $.fn.dataTable.defaults, {
			searchDelay: 1500,
			preDrawCallback: function( settings ) {
				KTApp.block($(this).closest('.card'));
			},
			drawCallback: function(settings) {
				KTApp.unblock($(this).closest('.card'));
			}
		});
		$.fn.dataTable.ext.errMode = function ( settings, helpPage, message ) {
			KTApp.unblock($('#'+settings.sTableId).closest('.card'));
			alert('Server Error: '+ message);
		};
		</script>
		@yield('scripts')
		<!--end::Page Scripts-->

		<script
        src="assets/js/ab-particles.min.js"
        integrity="sha384-HI+YXFmq6RX6R45hGuCOv6U/XhbS6swme7nnQVc8g6QfhucST79WEzlK6XMbanUp"
        crossorigin="anonymous"
        defer>
		</script>
		<script defer>
			$(document).ready(function() {
				particles(speed=15, avoidMouse=false, opacity=65);
			});
		</script>


		<script>
			var tampilkan_lock = false;

			function buka_lock_login(){
				$(".lock-login").hide();
				localStorage.setItem("lock_login", false);
			} 

			function tampilkan_lock_login(){
				$(".lock-login").show();
			}

			tampilkan_lock = localStorage.getItem("lock_login");

			if(tampilkan_lock=="false"){
				// alert("buka");
				setTimeout(() => {
					buka_lock_login();
				}, 500);
			}
			
		</script>
		<div class="lock-login">
			<form onsubmit="return false;">
				<label for="password">Password</label>
				<input id="password" type="password" pattern="indosat2020" placeholder="Enter your password" required="required"/>
				<input id="login" type="checkbox"/>
				<label class="login-button" for="login" onclick="buka_lock_login()"><span>Enter</span>
					<svg>
					<path d="M10,17V14H3V10H10V7L15,12L10,17M7,2H17A2,2 0 0,1 19,4V20A2,2 0 0,1 17,22H7A2,2 0 0,1 5,20V16H7V20H17V4H7V8H5V4A2,2 0 0,1 7,2Z"></path>
					</svg>
				</label>
				<div class="padlock">
					<div class="padlock__hook">
					<div class="padlock__hook-body"></div>
					<div class="padlock__hook-body"></div>
					</div>
					<div class="padlock__body">
					<div class="padlock__face">
						<div class="padlock__eye padlock__eye--left"></div>
						<div class="padlock__eye padlock__eye--right"></div>
						<div class="padlock__mouth padlock__mouth--one"></div>
						<div class="padlock__mouth padlock__mouth--two"></div>
						<div class="padlock__mouth padlock__mouth--three"></div>
					</div>
					</div>
				</div>
				<!-- <div class="app">
					<h1>You logged in! 🎉</h1>
					<button class="logout-button" type="reset">Logout</button>
				</div><span class="logout-message">You have logged out.</span> -->
			</form>
		</div>
	</body>

	<!--end::Body-->
</html>