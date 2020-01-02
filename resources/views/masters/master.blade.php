<!DOCTYPE html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
	<title>Simple-Diet-Plan</title>
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/flag.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('assets/css/keto742d.css?id=ab3a33dbd933a3670f5c') }}" class="color-switcher-link"/>
	<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/sentry768c.js?id=cb85a4c1681cc0fd6a4d') }}"></script>
	
	<script src="https://js.stripe.com/v3/"></script>
</head>

<body class="ds">

	<div id="preloader" class="preloader">
		<h1>@lang('app.loading')</h1>
		<div id="cooking">
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div id="area">
				<div id="sides">
					<div id="pan"></div>
					<div id="handle"></div>
				</div>
				<div id="pancake">
					<div id="pastry"></div>
				</div>
			</div>
		</div>
	</div>

    @yield('content')

    <script src="{{ asset('assets/js/compressed.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	
    @yield('ExtraJavascript')

</body>

</html>