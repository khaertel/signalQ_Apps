@extends('site.layouts.default-nomenu')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<div id="signin_container">
	<div id="signin">
		<form method="post" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label> 
			<input tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">
			<label for="password">{{ Lang::get('confide::confide.password') }}</label> 
			<input tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password"> 
		    @if ( Session::get('error') )
		        <div class="alert alert-danger">{{ Session::get('error') }}</div>
		    @endif
		
		    @if ( Session::get('notice') )
		        <div class="alert">{{ Session::get('notice') }}</div>
		     @endif
			<button>{{ Lang::get('confide::confide.login.submit') }}</button>
			<a class="btn btn-default "href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
		</form>
	</div>
</div>
@stop
