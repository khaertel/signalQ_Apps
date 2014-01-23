<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta charset="UTF-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>
		@section('title')
			{{{ $title }}} :: QDash
		@show
	</title>

	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- iOS favicons. -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('/') }}/assets/bootstrap/ico/apple-touch-icon-144-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('/') }}/assets/bootstrap/ico/apple-touch-icon-114-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('/') }}/assets/bootstrap/ico/apple-touch-icon-72-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" href="{{ URL::to('/') }}/assets/bootstrap/ico/apple-touch-icon-57-precomposed.png') }}}">

	<!-- CSS -->
	{{ Assets::css() }}

	<style>
	.tab-pane {
		padding-top: 20px;
	}
	</style>

	@yield('styles')

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Container -->
	<div class="container">

		<!-- Notifications -->
		@include('notifications')
		<!-- ./ notifications -->

		<div class="page-header">
			<h3>
				{{ $title }}
				<div class="pull-right">
					<button class="btn btn-default btn-small btn-inverse close_popup"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</button>
				</div>
			</h3>
		</div>

		<!-- Content -->
		@yield('content')
		<!-- ./ content -->

		<!-- Footer -->
		<footer class="clearfix">
			@yield('footer')
		</footer>
		<!-- ./ Footer -->

	</div>
	<!-- ./ container -->

	<!-- Javascripts -->
	{{ Assets::js() }}
	
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.close_popup').click(function(){
				parent.jQuery.fn.colorbox.close(); //parent.$.colorbox.close();
				return false;
			});
			$(function() {
				$('#deleteForm').submit(function(event) {
			    	var form = $(this);
			    	$.ajax({
			      		type: form.attr('method'),
			      		url: form.attr('action'),
			      		data: form.serialize()
			    	}).done(function() {
			      		parent.jQuery.colorbox.close();
			      		parent.oTable.fnReloadAjax();
			    	}).fail(function() {
			 		});
			 		event.preventDefault();
				});
			});
		});
    </script>

    @yield('scripts')

</body>

</html>