// This is the jQuery logic that controlls the slide-over navigation
		





$(".toggle-button").click(function(){


	//  animation
	var current_width = parseInt($('.navigation').css("left"));
	

	var css = {};

	if (current_width < 0){

		css = { left: '0%'};
		
	} else {
		css = {  left: '-100%' };
		
	}
	$('.navigation').animate(css, 200);
	




});