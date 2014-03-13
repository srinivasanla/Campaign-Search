// On document ready functions
// ======================================================================

// If JavaScript is enabled remove 'no-js' class and give 'js' class
jQuery('html').removeClass('no-js').addClass('js');

jQuery(document).ready(function($) {

	jQuery('#windowTitleDialog').bind('show', function () { document.getElementById ("xlInput").value = document.title; });
	
	jQuery(document).tooltips();
	
	// FitVid Magic - Target all videos
	jQuery("body").fitVids();
	
	//AutoHeight Textareas
	jQuery('textarea.auto-height').flexText();
	 
	 //Image Overlays
	 if (jQuery().rmimage_rollover) { jQuery(".post-thumb").rmimage_rollover(); 	}
	  
  	 //Validate forms 
	 if (jQuery().validate) { jQuery("#commentform").validate(); }
	 
	//Back to Top
	jQuery().UItoTop({ 
		text: '',
		easingType: 'easeOutQuart'
	});
		
	/* ---------------------------------------------------------------------- */
	/* Isotope 
	/* ---------------------------------------------------------------------- */
	if( jQuery().isotope ) {
	    
	    jQuery(function() {

            var container = jQuery('.isotope'),
                optionFilter = jQuery('#sort-by'),
                optionFilterLinks = optionFilter.find('a');
            
            optionFilterLinks.attr('href', '#');
            
            optionFilterLinks.click(function(){
                var selector = jQuery(this).attr('data-filter');
                container.isotope({ 
                    filter : '.' + selector, 
                    itemSelector : '.page-grid-item',
                    layoutMode : 'fitRows',
                    animationEngine : 'best-available'
                });
                
                // Highlight the correct filter
                optionFilterLinks.removeClass('active');
                jQuery(this).addClass('active');
                return false;
            });
            
	    });
    
	}
	
		
	/* ---------------------------------------------------------------------- */
	/* Accordion event handlers
	/* ---------------------------------------------------------------------- */
	jQuery('.slideimage').hide();
	jQuery('.slide-minicaption').hide();
	jQuery('.slidecaption').hide();

	jQuery(".accslide").hover(function() {
		jQuery(".slide-minicaption",this).stop().animate({opacity: 0},200, 'easeInSine').parent().find(".slidecaption").show().stop().delay(400).animate({opacity: 0.8, bottom: '20'},400, 'easeOutSine');	
	},function(){
		jQuery(".slide-minicaption",this).stop().animate({opacity: 0.8},200, 'easeOutSine');
		jQuery(".slidecaption",this).stop().animate({opacity: 0, bottom: '-20'}, 200, 'easeInSine').hide();				
	});
	
		
});




/* ---------------------------------------------------------------------- */
/* OPTIONAL HEADER DISPLAY ON SCROLL
/* ---------------------------------------------------------------------- */
jQuery(document).ready(function($) {
 $(window).scroll(function(){
  var h = $('body').height();
  var y = $(window).scrollTop();
  if( y > (h*.15) && y < (h*.85) ){
   $(".drop-in-header").fadeIn("slow");
  } else {
   $('.drop-in-header').fadeOut('slow');
  }
	});	

});