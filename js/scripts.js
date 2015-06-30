jQuery(document).on('mobileinit', function ($) {
   $.mobile.ignoreContentEnabled = true;
   $.mobile.defaultPageTransition = "slide";
});



jQuery(document).ready(function($) {
	
  $('div.gallery img').each(function(i) {    $(this).addClass('img-responsive');  });
	
	
	/*$("ul.main_menu a, .footer_menu a").click(function(){
		return false;
	});*/
	 
	$('.carousel').carousel({
 		 interval: 6000
	}); 
	
	
	
	/*$('.carousel').swiperight(function(e) {
      $('.carousel').carousel('prev');  
    });  
   $('.carousel').swipeleft(function(e) {
      $('.carousel').carousel('next');  
   }); */
 	 
	 
	 
	 /*$('div').on('swipeleft', function(e) {
	   e.stopImmediatePropagation();
	});*/
	  
});
