(function ($) {

  setTimeout(() => {
    $('.owl-carousel.products').owlCarousel({
      margin: 5,
      nav: true,
      lazyLoad: true,
      dots: false,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        1199: {
          items: 5
        },
        992: {
          items: 3
        },
        554: {
          items: 2
        },
        0: {
          items: 1
        },
      }
    });
  }, 2500);

  setTimeout(() => {
    $('.owl-carousel.slides').owlCarousel({
      nav: false,
      dots: true,
      lazyLoad: true,
      items: 1,
      loop: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    });
  }, 1000);

  setTimeout(() => {
    $('.owl-carousel.authors').owlCarousel({
      nav: true,
      dots: false,
      lazyLoad: true,
      margin: 50,
      items: 5,
      loop: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    });
  }, 1000);
})(jQuery);
