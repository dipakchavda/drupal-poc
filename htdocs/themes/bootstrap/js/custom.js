

/* if(jQuery('.region-socialshare li a').attr('href') == 'https://www.facebook.com/SanPellegrino/') { 
   
   
     jQuery(this).parent().addClass('facebook');
} */

jQuery('.region-socialshare ul li').eq(0).addClass("facebook");
jQuery('.region-socialshare ul li').eq(1).addClass("instagram");
jQuery('.region-socialshare ul li').eq(2).addClass("pintrest");
jQuery('.region-socialshare ul li').eq(3).addClass("youtube");


// Top navigation effect
	jQuery("#main-menu-desktop").hide().animate({left: '-1000px'});
	jQuery("#main-menu-desktop").removeClass('open');
	jQuery("#nav-icon3").removeClass('open');
    jQuery('#nav-icon3').click(function () {
		if (jQuery("#main-menu-desktop").is(":visible") == true) {
			jQuery("#main-menu-desktop").removeClass('open');
			jQuery("#nav-icon3").removeClass('open');
			jQuery("#main-menu-desktop").hide().animate({left: '-1000px'},"slow");
			
		}
		else {
			jQuery("#main-menu-desktop").show().animate({left: '0px'},"slow");
			jQuery("#main-menu-desktop").addClass('open');
			jQuery("#nav-icon3").addClass('open');
		}
    });

    /*jQuery('.cross').click(function () {
        jQuery(this).hide();
        jQuery("#nav-icon3").show();
        jQuery(".top_menu_display").animate({left: '-1000px'});
    });*/


    