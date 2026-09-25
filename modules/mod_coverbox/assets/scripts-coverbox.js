 (function(jQuery) {
    'use strict';
    jQuery(document).ready(function() {
 
	

      
        
            
        
            /* ============== COVERBOXES ============== */
            jQuery('.coverbox').on('mouseenter', function() {
                if(window.matchMedia('screen and (min-width : 991px)').matches){
                    var index = jQuery(this).parent().index();
                    jQuery(this).parents('.coverboxes').children('.active').animate({marginLeft: "0"}, {duration: 400, queue: false});
                    jQuery(this).parents('.coverboxes').children('.active').toggleClass('active');
                    jQuery(this).parents('.coverboxes').children().eq(index+1).animate({marginLeft: jQuery(this).parent().width()+29},{duration: 400, queue: false});
                    jQuery(this).parents('.coverboxes').children().eq(index+1).toggleClass('active');
                }
            });
            jQuery(window).on('resize', function(){
                var item = jQuery('.coverboxes').children('.active');
                item.css('margin-left', item.eq(item.index()-1).width()+29);
            });
            jQuery('.coverboxes').children('div').eq(0).children('.coverbox').trigger('mouseenter');
            
           
         
	});
	 
	

	
	
})(jQuery); 