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
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/styles/base.css" type="text/css" media="screen" />
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{ URL::to('/') }}/assets/styles/favicon.png">
</head>
<body>
	<!-- Content -->
	@yield('content')

	<!-- Javascripts
	================================================== -->	
	<script src="{{ URL::to('/') }}/assets/js/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/js/jquery.labelify.js" type="text/javascript"></script>
	<script src="{{ URL::to('/') }}/assets/js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script src="{{ URL::to('/') }}/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	<script src="{{ URL::to('/') }}/assets/js/base.js" type="text/javascript"></script>
	<script>
	  (function(i,s,o,g,r,a,m) { i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() {
	  (i[r].q=i[r].q||[]).push(arguments) } ,i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  } )(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-43183822-1', 'signalq.ca');
	  ga('send', 'pageview');
	</script>

	</body>
</html>
