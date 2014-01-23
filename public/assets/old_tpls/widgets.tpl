{include file='_header.tpl'}
{include file='_menu.tpl'}

<div id="widget_container" class="{$widget.area}">
<h2>QDash Configuration Panels</h2>
<form action="widgets.php" method="post">
{foreach $widgets as $widget}
	<div class="widget">
		<div class="widget_cat {$widget.area}">{$widget.area}</div>
		<div class="widget_screenshot" style="background: url(/qdash_screens/{$widget.example_img}.png) center top no-repeat #fff;background-size:cover"></div>
		<h3>{$widget.metric}</h3>
		
	
		<p>{$widget.description}</p>
		<div class="widget_options">
			<div class="updates">Updates every {$widget.updates_default}</div>
			<div class="activate"><input type="checkbox" name="{$widget.widget_class}[active]" value="true" id="{$widget.widget_class}_chosen" {$widget.active}> <label for="{$widget.widget_class}_chosen">Active</label></div>
			<div class="alert">
			{if $widget.supports_alert eq 1}
			Alert me if value 
			<select name="{$widget.widget_class}[alert_type]">
				<option value="" {if $widget.alert_type eq ''} selected {/if}>no alerting</option>			
				<option value="gtoreq" {if $widget.alert_type eq 'gtoreq'} selected {/if}>is higher than</option>
				<option value="ltoreq" {if $widget.alert_type eq 'ltoreq'} selected {/if}>drops below</option>
			</select>
			<input type="text" name="{$widget.widget_class}[alert_threshold]" class="threshold" value="{$widget.alert_threshold}">
			{/if}
			</div>
			<input type="hidden" name="{$widget.widget_class}[dashboard_widgets_id]" value="{$widget.dashboard_widgets_id}" />
			<input type="hidden" name="{$widget.widget_class}[slots]" value="{$widget.number_of_slots}" />
			<input type="hidden" name="{$widget.widget_class}[system_parameters]" value='{$widget.system_parameters}' />
			<input type="hidden" name="{$widget.widget_class}[user_parameters]" value='{$widget.user_parameters}' />
			<input type="hidden" name="{$widget.widget_class}[prev_active]" value="{$widget.active}" />
			<input type="hidden" name="{$widget.widget_class}[widget_type_id]" value="{$widget.widget_type_id}" />
			<input type="hidden" name="{$widget.widget_class}[updates_default]" value="{$widget.updates_default}" />
		</div>
	</div>
{/foreach}
<button type="submit">Save</button>
</form>
</div>
{include file='_footer.tpl'}
