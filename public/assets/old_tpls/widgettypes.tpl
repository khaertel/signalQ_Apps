{include file='_header.tpl'}

<div align="left">
{foreach $widgets as $widget}

<div style="font-size:18px">
<strong>Metric:</strong> {$widget.metric} ({$widget.parameter}) <strong>Type:</strong> {$widget.widget_slot_kind} <strong>Slot:</strong> {$widget.slot_id} <br /></div>
	<div style="font-size:12px">
	{foreach $data[{$widget.slot_id}] as $wdata}
	
	<strong>example value:</strong> {$wdata.value} <br /><br /> 
	
	{/foreach}
	</div>
	<hr />
	<br />
{/foreach}
</div>
{include file='_footer.tpl'}
