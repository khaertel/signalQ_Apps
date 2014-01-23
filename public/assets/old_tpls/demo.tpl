<!DOCTYPE html>
<html>
<head>
	<title>qDash Demo</title>
	<meta charset="utf-8">
	
	<link href="styles/qdash.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.9.1.js"></script>
	<script src="scripts/highcharts.js"></script>
	<script src="scripts/highcharts-more.js"></script>
	<script src="scripts/hstheme.js"></script>
</head>

<body>
	<div class="sixteen-grid">
	{foreach $widgets as $widget key=index name=count}
		
		<div class="box-{$smarty.foreach.count.index}">
			<div class="chart">
				<div class="title">{$widget.metric} ({$widget.parameter}) - {$widget.widget_slot_kind} - {$widget.slot_id}</div>
				{$data[{$widget.slot_id}]}
				<div class="chart-container" id="{$widget.slot_id}"></div>
			</div>
		</div>
	{/foreach}
	</div>
</body>
</html>