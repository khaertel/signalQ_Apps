@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
  Client Directory ::
@parent
@stop

{{-- Content --}}
@section('content')

<div id="widget_container" class="">
<h2>QDash Widget Catalogue</h2>
<form action="" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	@foreach ($widgets as $widget)
		<div class="widget">
			<div class="widget_cat {{$widget->area}}">{{$widget->area}}</div>
			<div class="widget_screenshot" style="background: url({{URL::to('/')}}/assets/qdash_screens/{{$widget->example_img}}.png) center top no-repeat #fff;background-size:cover"></div>
			<h3>{{$widget->name}}</h3>
			
		
			<p>{{$widget->description}}</p>
			<div class="widget_options">
				<div class="activate"><input type="checkbox" value="1" name="widgets[{{ $widget->id }}]" id="widgets[{{ $widget->id }}]"><label for="widgets[{{ $widget->id }}]">Active</label></div>
				<div class="alert">
				@if ($widget->supports_alert == 1)
				Widget supports alerts 
				@endif
				</div>
			</div>
		</div>
	@endforeach
<button type="submit">Save</button>
</form>
</div>
@stop