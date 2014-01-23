@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
  User Dashboard ::
@parent
@stop

{{-- Content --}}
@section('content')

	<div class="page-header">
		<h3>
			QDash User Dashboards
			<div class="pull-right">
				<a href="{{{ URL::to('admin/widgets/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>

<div id="dashboard_container" class="">
<form action="" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<table id="dashboardwidgets" class="table table-striped table-hover" width="80%">
		<thead>
			<tr><th class="col-md-1">Dashboard Name</th><th class="col-md-2">Widgets Assigned</th></tr>
		</thead>
		@foreach ($dashboards as $dashboard)
			<tr>
				<td><div class="">{{$dashboard->type}}</div></td>
				<td><ul>
				@foreach ($dashboard->widgetInstances as $instance)
					<li>{{$instance->name}} 
					<a href="{{{ $instance->edit_link }}}" class="iframe btn btn-xs btn-default">
						@if ($instance->active == 0) 
							Activate
						@else Edit
						@endif</a></li>
				@endforeach
				</ul></td>
			</tr>
		@endforeach
	</table>
<button type="submit">Save</button>
</form>
</div>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
	           	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		});
	</script>

@stop