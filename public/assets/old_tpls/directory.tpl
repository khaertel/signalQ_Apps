{include file='_header.tpl'}
{include file='_menu.tpl'}
{if {$show_note} }
	{if {$error != ''}}
	<script type="text/javascript">
	$(function() {
		$.colorbox( { html:"<h1>Oh no!</h1><p>Something went wrong while sending your message.</p>", width:"400px",height:"200px" } );
	} );
	</script>	
	{else}
	<script type="text/javascript">
	$(function() {
		$.colorbox( { html:"<h1>Thank you</h1><p>Your message was sent!</p>", width:"400px",height:"200px" } );
	} );
	</script>
	{/if}
{/if}
<script type="text/javascript">
function composeMessage() {
	$.colorbox( { html:"<h1>Send a message</h1><p>Please enter your message to the community. Question subjects will be posted on a protected Twitter feed <a href='https://twitter.com/P1Directory'>@P1Directory</a> and everyone can look up your message details using the message id.</p><form method='post' action='/directory.php' id='signup'><label for='subject'>Subject</label><input type='text' id='subject' name='subject' value='' /><label for='message'>Message</label><textarea id='message' name='message' rows='3' ></textarea><button>Send</button></form>", width:"60%",height:"500px" } );
}
</script>
<div id="directory">
	<div class="container">
		PortaOne Client Directory
		<small>A service from signalQ</small>
	</div>
	<div id="directory_map">
		<div class="map_location" id="avoxi_location">Avoxi</div>
		<div class="map_location" id="phonect_location">Phonect</div>
		<div class="map_location" id="millenicom_location">Millenicom</div>
		<div class="map_location" id="cellip_location">Cellip</div>
		<div class="map_location" id="redder_location">Redder</div>
		<div class="map_location" id="icosnet_location">Icosnet</div>
		<div class="map_location" id="backbone_location">Backbone</div>
		<div class="map_location" id="buzz_location">Buzz & Synety</div>
		<div class="map_location" id="ixo_location">Ixo</div>
		<div class="map_location" id="mtn_location">MTN Satellite</div>
		<div class="map_location" id="niede_location">Niede</div>
		<div class="map_location" id="rh_location">R&amp;H</div>
		<div class="map_location" id="skywire_location">Skywire</div>
		<div class="map_location" id="baycall_location">Baycall</div>
		
		
	
		<div id="directory_listings">
			{foreach $customers as $customer}	
			<div class="client">
				<div class="client_logo" style="background:url(client_logos/{$customer.client_logo}) center center no-repeat #fff"></div>
				<h3><a href="{$customer.website}" target="_blank">{$customer.company}</a></h3>
				<div class="client_provides">Provides: {$customer.haves}</div>
				<div class="client_locations">{$customer.op_countries}</div>
				
				<div class="client_contact">
				{$customer.first_name} {$customer.last_name}<br/>
				{$customer.contact_phone}<br/>
				<a href="mailto:">{$customer.email_address}</a>
				</div>
				
				<div class="client_needs">Interested in: {$customer.needs}</div>			
			</div>
			{/foreach}
		</div>
	
		
		<p class="footer">Copyright &copy; 2013 SignalQ Inc. All Rights Reserved.</p>
	</div>
</div>

{include file='_footer.tpl'}