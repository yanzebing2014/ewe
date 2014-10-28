$(function(){
	$("#nav_section>a").hover(
		function(){
			$(this).addClass('animated fadeIn');
		},
		function(){
			$(this).removeClass('animated fadeIn');
		}
	)
});