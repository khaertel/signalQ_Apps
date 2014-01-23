@extends('site.layouts.modal')

{{-- Content --}}
@section('content')

<h3>{{$winstance->name}}</h3>

Active: {{$winstance->active}}

@foreach ($winstance->metricInstances as $minstance)
	<div>Name: {{$minstance->name}}</div>
	<div>Parameters: {{ $minstance->params}}</div>

@endforeach

@stop