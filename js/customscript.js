jQuery(document).ready(function () { 
    
	jQuery("#foliogine_lite_nav").tinyNav({header: 'Navigation'});
   
    jQuery('ul.sub-menu').parent().addClass('dropdown');
    jQuery('li.dropdown').children('a').addClass('dropdown-toggle');
    jQuery('.dropdown-toggle').append('<b class="arrow-small"></b>');
    
    
    jQuery('#shareme').sharrre({
        share: {
            googlePlus: true,
            facebook: true,
            twitter: true,
        },
        buttons: {
            googlePlus: {size: 'small', annotation:'bubble'},
            facebook: {size: 'small', annotation:'bubble'},
            twitter: {size: 'small', annotation:'bubble'},
        },
              enableHover: false,
              enableCounter: false,
              enableTracking: true
            });
   
    jQuery('.slider1').bxSlider({
        slideWidth: 920,
        minSlides: 4,
        maxSlides: 4,
        slideMargin: 10,
        pager: false,
        nextText: '',
        prevText: ''
    });
  

	jQuery(window).scroll(function() {
	   if(jQuery(window).scrollTop() + jQuery(window).height() > jQuery(document).height() - 100) {
		    jQuery(window).unbind('scroll');
		    jQuery("#donutchart1").donutchart({'size': 150 });
			jQuery("#donutchart1").donutchart("animate");
			jQuery("#donutchart2").donutchart({'size': 150 });
			jQuery("#donutchart2").donutchart("animate");
			jQuery("#donutchart3").donutchart({'size': 150 });
			jQuery("#donutchart3").donutchart("animate");
			jQuery("#donutchart4").donutchart({'size': 150 });
			jQuery("#donutchart4").donutchart("animate");
	   }
	});
			
	jQuery('.carousel').carousel({
  		interval: 2000,
		pause: "hover"
	})		
	
    var full_width = 0;
    jQuery("ul.menu:first > li").each(function( index ) {    
        if((jQuery(this).width() + full_width) > 760) {
            jQuery(this).remove();
        }
        full_width = full_width + jQuery(this).width(); 
    });
    
    jQuery(function() {
        jQuery("ul.nav-tabs li").each(function(index) {
            jQuery(this).removeClass('active');
        });
        jQuery("ul.nav-tabs li").click(function(index) {
            jQuery("ul.nav-tabs li").each(function(index) {
                jQuery(this).removeClass('active');
            });
            jQuery(this).addClass('active');    
        });
        
        // setup ul.tabs to work as tabs for each div directly under div.panes
        jQuery("ul.nav-tabs").tabs("div.tab-content > div.tab-pane");
    });
   
});