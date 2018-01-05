jQuery(document).ready(function($) {

	$(document).on('ready', function(){
//makes the mobile list appear when you hit the menu button
		$('#mobile_header').on('click', function(){
			$('#mobile_menu').css("height", 250);
			$('#mobile_list').css("display","block");
			$('#mobile_header').css("display","none");
		});

//brings back the menu button when you hit the menu list
		$('#mobile_list').on('click', function(){
			$('#mobile_menu').css("height", 25);
			$('#mobile_header').css("display","block");
			$('#mobile_list').css("display", "none");
		});

//makes the menu button disappear when you stretch the screen beyond 900px
		$(window).on('resize', function(){
			var w = $(window).width(); 
			if (w > 900 && $('#mobile_header').is(':visible')){
				$('#mobile_header').removeAttr('style');
			} 
		});	
		
//makes menu list disappear when you stretch
		$(window).on('resize', function(){
			var w = $(window).width();
			if (w > 900 && $('.mobile_list').is(':visible')){ 
				$('#mobile_list').removeAttr('style');
			}	
		});
	});
});