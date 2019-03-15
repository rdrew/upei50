(function ($) {



  Drupal.behaviors.navbarMenu = {
    attach: function (context, settings) {
      $(".navbar-burger", context).once('burger-js', function () {
        $(this).click(function() {
          $(".navbar-burger").toggleClass("is-active");
          $(".navbar-menu").toggleClass("is-active");
        });
      });
    }
  };
  Drupal.behaviors.accordionInit = {
    attach: function (context, settings) {

    var accordions = bulmaAccordion.attach(); // accordions now contains an array of all Accordion instances

    }
  };












})(jQuery);
