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
	Drupal.behaviors.masonry = {
		attach: function (context, settings) {

			var $grid = $('#tbt_grid1').masonry({
				// options...
				itemSelector: '.grid-item',
				gutter: 10,
				columnWidth: 150
			});

			$grid.imagesLoaded().progress( function() {
				$grid.masonry('layout');
			} );

			document.getElementById('tbt_grid1').onclick = function(event) {
				event = event || window.event
				var target = event.target || event.srcElement,
					link = target.src ? target.parentNode : target,
					options = { index: link, event: event },
					links = this.getElementsByTagName('a')
				blueimp.Gallery(links, options)
			}
		}
	};
	Drupal.behaviors.masonry02 = {
		attach: function (context, settings) {

			var $grid = $('#tbt_grid2').masonry({
				// options...
				itemSelector: '.grid-item',
				gutter: 10,
				columnWidth: 150
			});

			$grid.imagesLoaded().progress( function() {
				$grid.masonry('layout');
			} );

			document.getElementById('tbt_grid2').onclick = function(event) {
				event = event || window.event
				var target = event.target || event.srcElement,
					link = target.src ? target.parentNode : target,
					options = { index: link, event: event },
					links = this.getElementsByTagName('a')
				blueimp.Gallery(links, options)
			}
		}
	};
	Drupal.behaviors.masonry03 = {
		attach: function (context, settings) {

			var $grid = $('#tbt_grid3').masonry({
				// options...
				itemSelector: '.grid-item',
				gutter: 10,
				columnWidth: 150
			});

			$grid.imagesLoaded().progress( function() {
				$grid.masonry('layout');
			} );

			document.getElementById('tbt_grid3').onclick = function(event) {
				event = event || window.event
				var target = event.target || event.srcElement,
					link = target.src ? target.parentNode : target,
					options = { index: link, event: event },
					links = this.getElementsByTagName('a')
				blueimp.Gallery(links, options)
			}
		}
	};
	Drupal.behaviors.masonry04 = {
		attach: function (context, settings) {

			var $grid = $('#tbt_grid4').masonry({
				// options...
				itemSelector: '.grid-item',
				gutter: 10,
				columnWidth: 150
			});

			$grid.imagesLoaded().progress( function() {
				$grid.masonry('layout');
			} );

			document.getElementById('tbt_grid4').onclick = function(event) {
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

    var accordions = bulmaAccordion.attach();

    }
  };




})(jQuery);
