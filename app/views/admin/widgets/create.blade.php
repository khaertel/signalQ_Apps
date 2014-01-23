@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
			<li class=""><a href="#tab-metrics" data-toggle="tab">Metrics</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit widget Form --}}
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
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', $widget->name) }}}" />
						{{{ $errors->first('name', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ name -->
				<div class="form-group {{{ $errors->has('type') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="type">Type</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="type" id="type" value="{{{ Input::old('type', $widget->type) }}}" />
						{{{ $errors->first('type', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ type -->
				<!-- ./ class -->
				<div class="form-group {{{ $errors->has('class') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="class">Class</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="class" id="class" value="{{{ Input::old('class', $widget->class) }}}" />
						{{{ $errors->first('class', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ class -->
				<!-- ./ eximg -->
				<div class="form-group {{{ $errors->has('example_img') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="example_img">Example Image</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="example_img" id="example_img" value="{{{ Input::old('example_img', $widget->example_img) }}}" />
						{{{ $errors->first('example_img', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ eximg -->
				<!-- sub -->
				<div class="form-group {{{ $errors->has('subscription_plan') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="subscription_plan">Subscription Plan</label>
					<div class="col-md-10">
						<select class="form-control" name="subscription_plan" id="subscription_plan">
							<option value="Regular"{{{ ($widget->subscription_plan == 'Regular' ? ' selected="selected"' : '') }}}>Regular</option>
							<option value="Premium"{{{ ($widget->subscription_plan == 'Premium' ? ' selected="selected"' : '') }}}>Premium</option>					
						</select>
						{{{ $errors->first('subscription_plan', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ sub -->
				<!-- area -->
				<div class="form-group {{{ $errors->has('area') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="area">Area</label>
					<div class="col-md-10">
						<select class="form-control" name="area" id="area">
							<option value="Network"{{{ ($widget->area == 'Network' ? ' selected="selected"' : '') }}}>Network</option>
							<option value="Finance"{{{ ($widget->area == 'Finance' ? ' selected="selected"' : '') }}}>Finance</option>					
							<option value="Sales%20&%20Marketing"{{{ ($widget->area == 'Sales & Marketing' ? ' selected="selected"' : '') }}}>Sales & Marketing</option>					
						</select>
						{{{ $errors->first('area', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ type -->
				<!-- alert -->
				<div class="form-group {{{ $errors->has('supports_alert') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="supports_alert">Supports Alert?</label>
					<div class="col-md-10">
						<select class="form-control" name="supports_alert" id="supports_alert">
							<option value="1"{{{ ($widget->supports_alert ? ' selected="selected"' : '') }}}>Yes</option>
							<option value="0"{{{ ($widget->supports_alert ? '' : ' selected="selected"') }}}>No</option>					
						</select>
						{{{ $errors->first('supports_alert', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ sub -->
				<!-- ./ Description -->
				<div class="form-group {{{ $errors->has('description') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="description">Description</label>
					<div class="col-md-10">
						
						<textarea class="form-control" name="description" id="description" rows="5">{{{ Input::old('description', $widget->description) }}}</textarea>
						{{{ $errors->first('description', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ name -->
				<!-- ./ Description -->
				<div class="form-group {{{ $errors->has('description_ext') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="description_ext">Extended Description</label>
					<div class="col-md-10">
						
						<textarea class="form-control" name="description_ext" id="description_ext" rows="5">{{{ Input::old('description_ext', $widget->description_ext) }}}</textarea>
						{{{ $errors->first('description_ext', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ name -->
			</div>
			<!-- ./ general tab -->
			<!-- Metrics tab -->
			<div class="tab-pane" id="tab-metrics">
			</div>
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update Widget</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
