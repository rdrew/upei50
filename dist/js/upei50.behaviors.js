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
    Drupal.behaviors.tbtGridInit = {
        attach: function (context, settings) {

            document.getElementById('tbt_grid').onclick = function(event) {
                event = event || window.event
                var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = { index: link, event: event },
                    links = this.getElementsByTagName('a')
                blueimp.Gallery(links, options)
            }

        }
    };
  Drupal.behaviors.accordionInit = {
    attach: function (context, settings) {

    var accordions = bulmaAccordion.attach(); // accordions now contains an array of all Accordion instances

    }
  };




})(jQuery);
