@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Metric Form --}}
	<form class="form-horizontal" method="post" action="" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Name -->
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="name">Name</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', $metric->name) }}}" />
						{{{ $errors->first('name', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ name -->
				<div class="form-group {{{ $errors->has('type') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="type">Type</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="type" id="type" value="{{{ Input::old('type', $metric->type) }}}" />
						{{{ $errors->first('type', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ type -->
				<!-- User parameter -->
				<div class="form-group {{{ $errors->has('user_parameters') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="user_parameters">User Parameters</label>
					<div class="col-md-10">
						
						<textarea class="form-control" name="user_parameters" id="user_parameters" rows="5">{{{ Input::old('user_parameters', $metric->user_parameters) }}}</textarea>
						{{{ $errors->first('user_parameters', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ System parameter -->
				<div class="form-group {{{ $errors->has('system_parameters') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="system_parameters">System Parameters</label>
					<div class="col-md-10">
						
						<textarea class="form-control" name="system_parameters" id="system_parameters" rows="5">{{{ Input::old('system_parameters', $metric->system_parameters) }}}</textarea>
						{{{ $errors->first('system_parameters', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ name -->
			</div>
			<!-- ./ general tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update Metric</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
