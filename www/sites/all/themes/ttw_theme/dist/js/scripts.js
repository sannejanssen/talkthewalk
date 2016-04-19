(function ($) {

  Drupal.behaviors.mobileNavigation = {
    attach: function (context, settings) {
      $(".mobile-toggle").click(function() {
        $('.hamburger', $(this)).toggleClass('active');
        $('.block-menu', $(this).parent()).slideToggle();
      });
    }
  };

}(jQuery));