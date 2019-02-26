const jQuery = jQuery.noConflict();
jQuery(function() {
  //Change header style depending on the current page
  if (jQuery('body.home').length || jQuery('body.page-template-about').length) {
    jQuery('.site-header').removeClass('sticky-header');
    jQuery('.site-header').addClass('fixed-header');
    jQuery(window).scroll(function(event) {
      let scroll = jQuery(window).scrollTop();
      if (scroll > jQuery(window).height()) {
        jQuery('.site-header').removeClass('fixed-header');
        jQuery('.site-header').addClass('sticky-header');
      } else {
        jQuery('.site-header').removeClass('sticky-header');
        jQuery('.site-header').addClass('fixed-header');
      }
    });
  } else {
    jQuery('.site-header').removeClass('fixed-header');
    jQuery('.site-header').addClass('sticky-header');
  }
});
