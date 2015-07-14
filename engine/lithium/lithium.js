// Smooth scrolling
jQuery(function() {
  jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      var navbar = jQuery('.navbar').height() + 10; // minus navbar height
      console.log(navbar);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top - navbar
        }, 1000);
        return false;
      }
    }
  });
});

// Init wowjs
(new WOW).init();