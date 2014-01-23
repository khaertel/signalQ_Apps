@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
  Client Directory ::
@parent
@stop

{{-- Content --}}
@section('content')

<div id="directory">
	<div class="container">
		PortaOne Client Directory
		<small>A service from signalQ</small>
	</div>
	<div id="directory_map">
		<div class="map_location" id="avoxi_location">Avoxi</div>
		<div class="map_location" id="phonect_location">Phonect</div>
		<div class="map_location" id="millenicom_location">Millenicom</div>
		<div class="map_location" id="cellip_location">Cellip</div>
		<div class="map_location" id="redder_location">Redder</div>
		<div class="map_location" id="icosnet_location">Icosnet</div>
		<div class="map_location" id="backbone_location">Backbone</div>
		<div class="map_location" id="buzz_location">Buzz & Synety</div>
		<div class="map_location" id="ixo_location">Ixo</div>
		<div class="map_location" id="mtn_location">MTN Satellite</div>
		<div class="map_location" id="niede_location">Niede</div>
		<div class="map_location" id="rh_location">R&amp;H</div>
		<div class="map_location" id="skywire_location">Skywire</div>
		<div class="map_location" id="baycall_location">Baycall</div>
		
		
	
		<div id="directory_listings">
			@foreach ($customers as $customer)
			@if ($customer->show_in_directory === 1) 	
			<div class="client">
				<div class="client_logo" style="background:url({{ URL::to('/') }}/assets/client_logos/{{$customer->client_logo}}) center center no-repeat #fff"></div>
				<h3><a href="{{$customer->website}}" target="_blank">{{$customer->company}}</a></h3>
				<div class="client_provides">Provides: {{$customer->haves}}</div>
				<div class="client_locations">{{$customer->op_countries}}</div>
				
				<div class="client_contact">
				{{$customer->first_name}} {{$customer->last_name}}<br/>
				{{$customer->contact_phone}}<br/>
				<a href="mailto:">{{$customer->email}}</a>
				</div>
				
				<div class="client_needs">Interested in: {{$customer->needs}}</div>			
			</div>
			@endif
			@endforeach
		</div>
	
		
		<p class="footer">Copyright &copy; 2013 SignalQ Inc. All Rights Reserved.</p>
	</div>
</div>

@stop