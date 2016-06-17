jQuery(document).ready(function($) {
	
	$('.mobile-close').click(function(event) {
		/* Act on the event */
		event.preventDefault();
		$(this).toggleClass('open').next().slideToggle(400);
	});	
		
});