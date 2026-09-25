jQuery.noConflict();
jQuery(document).ready(function(m){
	
	"use strict";
 
	
	
	/* PrettyPhoto For Portfolio */
	if(m(".portfolio-c").length) {
		m(".portfolio-c a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,social_tools: false,deeplinking:false});		
	}	
	

	
	
	 m(window).load(function() {
	
		var currentWidth = window.innerWidth || document.documentElement.clientWidth;	
		if(currentWidth > 768 ) {
			jQuery.noConflict();
			(function($){
				if(m("#dt-scroll-content").length) {
					m("#dt-scroll-content").mCustomScrollbar({
						axis:"x",
						scrollInertia:400,
						advanced:{
							autoExpandHorizontalScroll:true
						},
						theme:"dark",
						mouseWheel:{
							enable:true,
							scrollAmount:400
						}
					});
				}
			})(jQuery);
		}	
		
		
		
	}); 
	
		
	
	
});


