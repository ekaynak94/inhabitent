const jQuery = jQuery.noConflict();
jQuery(function() {
  let doSearch = false;
  //toogles search field on and off by pressing search button
  jQuery('.site-header').on('click', 'button', function() {
    if (doSearch) {
      doSearch = false;
      jQuery('.search-field').removeClass('search-field-on');
    } else {
      event.preventDefault();
      if (jQuery('.search-field-on').length) {
        jQuery('.search-field').removeClass('search-field-on');
      } else {
        jQuery('.search-field').addClass('search-field-on');
      }
      jQuery('header .search-field').focus();
    }
  });

  //triggers search button functionality when  enter key is pressed while focused on the search field
  jQuery(document).on('keypress', function(event) {
    if (event.which === 13 && jQuery('.search-field').is(':focus')) {
      doSearch = true;
      jQuery('.search-submit').trigger('click');
    }
  });

  //makes the search field disepear when focused away
  jQuery('.site-header').on('focusout', '.search-field', function() {
    if (jQuery('.search-field').val().length === 0) {
      jQuery('.search-field').removeClass('search-field-on');
    }
  });

  //Change header style depending on the current page
  if (
    jQuery('body.home').length ||
    jQuery('body.page-template-about').length ||
    jQuery('body.single-adventure').length
  ) {
    jQuery('.site-header').removeClass('sticky-header');
    jQuery('.site-header').addClass('fixed-header');
    jQuery(window).scroll(function() {
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
