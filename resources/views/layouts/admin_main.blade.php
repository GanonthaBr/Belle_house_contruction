<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Belle House Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Public Sans:300,400,500,600,700"]},
			custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/kaiadmin.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
</head>
<style>
	th{
		background-color: #61A1D6;
		color: #fff
	}
	tr,td{
		border: #61A1D6 1px solid;
		padding: 5px
	}
</style>

<body>
    <div class="wrapper">
		@include('partials.admin.sidebar')
        <div class="main-panel">
			@include('partials.admin.mainheader')
			 @yield('adminmain')
			
			
			@include('partials.admin.footer')
	    </div>
</div>
    
<!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

</body>
</html>