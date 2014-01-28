@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div id="directory">
	<div class="signal_container">
		PortaOne Client Directory
		<small>A service from signalQ</small>
	</div>
	<div id="directory_signup">
		<p>PortaOne Client Directory is a service to the PortaOne community from signalQ to help PortaOne customers connect and partner.</p> 
		
		<p>To access the directory, we ask that you share your contact information so other members can learn more about you. Please fill out the form below to gain access to the directory.</p>
		
		<p>Only PortaOne customers will have access to the directory.</p>
		
		<a href="http://clients.signalq.ca" id="existing_member">If you are already a member, click here to login</a>

        @if ( Session::get('error') )
            <div class="alert alert-error alert-danger">
                @if ( is_array(Session::get('error')) )
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

		
		<form method="post" action="{{ URL::to('user/create') }}" id="signup">
			<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			<label for="company">Company Name</label><input type="text" id="company" name="company" value="{{{ Input::old('company') }}}" />
			<label for="website">Website</label><input type="text" id="website" name="website" value="{{{ Input::old('website') }}}" />
			<label for="location">Location(s)</label><input type="text" id="location" name="location" value="{{{ Input::old('location') }}}" />
			
			<label for="name">Contact First Name</label><input type="text" id="first_name" name="first_name" value="{{{ Input::old('first_name') }}}" />
			<label for="name">Contact Last Name</label><input type="text" id="last_name" name="last_name" value="{{{ Input::old('last_name') }}}" />
			<label for="email">Contact Email</label><input type="text" id="email" name="email" value="{{{ Input::old('email') }}}" />
			<label for="phone">Contact Phone</label><input type="text" id="phone" name="phone" value="{{{ Input::old('phone') }}}" />
			<label for="twitter">Twitter Handle</label><input type="text" id="twitter" name="twitter" value="{{{ Input::old('twitter') }}}" />
			
			<label for="offered">Services Offered</label><input type="text" id="offered" name="offered" value="{{{ Input::old('offered') }}}" />
			<label for="needed">Services Needed</label><input type="text" id="needed" name="needed" value="{{{ Input::old('needed') }}}" />
			<input type="hidden" name="form_id" value="directory" />
			<button>Sign up</button>
		</form>
		<p class="footer">Copyright &copy; 2013 SignalQ Inc. All Rights Reserved.</p>
	</div>
</div>
@stop
