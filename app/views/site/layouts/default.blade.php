<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>
		@section('title')
			PortaSwitch Ecosystem Solutions - SignalQ Solutions Inc.
		@show
	</title>
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS
	================================================== -->
	{{ Assets::css() }}
	
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/styles/base.css" type="text/css" media="screen" />	
	
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{ URL::to('/') }}/assets/styles/favicon.png">
</head>

<body>
	<!-- Container -->
	<div class="container">


		<div id="menu">
			@if (Auth::check())
				@if (Auth::user()->hasRole('admin'))
				<a href="{{{ URL::to('admin') }}}" class="button">Admin Panel</a>
				<a href="{{{ URL::to('dashboard') }}}" class="button">Qdash Settings</a>
		    	@endif
				<a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a>
				<a href="{{{ URL::to('user/logout') }}}">Logout</a>
			@else
				<a href="{{{ URL::to('/') }}}" class="home_button"></a>
				<a href="">Client Directory</a>
				<a href="{{{ URL::to('user/login') }}}">Login</a>
			@endif
		</div>
	
		<!-- Notifications -->
		@include('notifications')
	
		<!-- Content -->
		@yield('content')
	</div>
	<!-- ./ container -->

	<!-- Javascripts
	================================================== -->	
	{{ Assets::js() }}

	<script type="text/javascript">
		$('.wysihtml5').wysihtml5();
	    $(prettyPrint);
	</script>

	<script src="{{ URL::to('/') }}/assets/js/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/js/jquery.labelify.js" type="text/javascript"></script>
	<script src="{{ URL::to('/') }}/assets/js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script src="{{ URL::to('/') }}/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	<script src="{{ URL::to('/') }}/assets/js/base.js" type="text/javascript"></script>

    @yield('scripts')

	</body>
</html>
