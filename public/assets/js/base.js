$(function(){
	$(":text").labelify({ text: "label", labelledClass: "inputlabel" });
	
	$("#clients").click(function(){
		$.colorbox({height:"680px", width: "520px" , inline:true , className:"clients", href:".client_signup"})
	});
	
	$(".close").click(function(){
		$.colorbox.close()
	});
	
	$('#screenshot').parallax("50%", 0.2);
	$('#phone').parallax("100%", 0.6);
});