{include file='_header.tpl'}
{include file='_menu.tpl'}

<div id="messages">

<div class="from"><a href="mailto:{$user.email_address}">{$user.first_name} {$user.last_name}</a> ({$user.company}) wrote:</div>

<p><b>{$message.subject}</b></p>
<p>{$message.message}</p>
</div>
<a href="#" class="button" onclick="composeMessage();">Add Reply</a>
<div id="replies">
	{foreach $replies as $reply}
	<div id="reply">
		<div class="from"><a href="mailto:{$reply.email_address}">{$reply.first_name} {$reply.last_name}</a> ({$reply.company}) wrote:</div>
		<p>{$reply.message}</p>
	</div>
	{/foreach}
</div>

{include file='_footer.tpl'}