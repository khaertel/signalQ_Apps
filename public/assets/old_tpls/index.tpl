{include file='_header.tpl'}
{if $message != ''}
<script type="text/javascript">
$(function() {
	$.colorbox( { html:"<h1>Error</h1> <p>{$message}</p>", width:"760px",height:"200px" } 
	);
} );
</script>
{/if}
<div id="signin_container">
	<div id="signin">
		<form method="post" action="/index.php">
			<label>Login</label> <input type="text" name="login" value="" id="login_field" />
			<label>Password</label> <input type="password" name="password" value="" id="password_field" />
			<button>Sign In</button>
		</form>
	</div>
</div>

{include file='_footer.tpl'}