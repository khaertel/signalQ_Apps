@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

    {{-- Delete Widget Form --}}
    <form class="form-horizontal" method="post" action="" autocomplete="off" id="deleteForm">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<!--        <input type="hidden" name="id" value="{{ $widget->id }}" />-->
        <!-- ./ csrf token -->
		<div>
		Are you sure you want to delete widget "{{$widget->name}}"?
		</div>
        <!-- Form Actions -->
        <div class="control-group">
            <div class="controls">
                <element class="btn-cancel close_popup">Cancel</element>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
        <!-- ./ form actions -->
    </form>
@stop