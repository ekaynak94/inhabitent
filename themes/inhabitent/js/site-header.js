const jQuery = jQuery.noConflict();
jQuery(function() {
  let doSearch = false;
  const searchField = '.search-field';
  const header = '.site-header';

  //toogles search field on and off by pressing search button
  jQuery(header).on('click', 'button', function() {
    if (doSearch) {
      doSearch = false;
      jQuery(searchField).removeClass('search-field-on');
    } else {
      event.preventDefault();
      if (jQuery('.search-field-on').length) {
        jQuery(searchField).removeClass('search-field-on');
      } else {
        jQuery(searchField).addClass('search-field-on');
      }
      jQuery('header .search-field').focus();
    }
  });

  //triggers search button functionality when  enter key is pressed while focused on the search field
  jQuery(document).on('keypress', function(event) {
    if (event.which === 13 && jQuery(searchField).is(':focus')) {
      doSearch = true;
      jQuery('.search-submit').trigger('click');
    }
  });

  //makes the search field disepear when focused away
  jQuery(header).on('focusout', searchField, function() {
    if (jQuery(searchField).val().length === 0) {
      jQuery(searchField).removeClass('search-field-on');
    }
  });

  //Change header style depending on the current page
  if (
    jQuery('body.home').length ||
    jQuery('body.page-template-about').length ||
    jQuery('body.single-adventure').length
  ) {
    jQuery(header).removeClass('sticky-header');
    jQuery(header).addClass('fixed-header');
    jQuery(window).scroll(function() {
      let scroll = jQuery(window).scrollTop();
      if (scroll > jQuery(window).height()) {
        jQuery(header).removeClass('fixed-header');
        jQuery(header).addClass('sticky-header');
      } else {
        jQuery(header).removeClass('sticky-header');
        jQuery(header).addClass('fixed-header');
      }
    });
  } else {
    jQuery(header).removeClass('fixed-header');
    jQuery(header).addClass('sticky-header');
  }
});
