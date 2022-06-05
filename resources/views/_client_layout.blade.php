<!DOCTYPE html>
<html lang="en">

<head>

  <title>BLM Book Store</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="/assets/img/logo/favicon.png">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="/assets/vendor/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="/assets/vendor/animate.css/animate.css">
  <link rel="stylesheet" href="/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="/assets/styles/vendors/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/styles/carousel.css">

  <link rel="stylesheet" href="/assets/styles/theme.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/toastr.css">
</head>

<body ng-app='app'>
  <!-- Start preloader -->
  <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text-preloader="L" class="letters-loading">
            L
          </span>

          <span data-text-preloader="O" class="letters-loading">
            O
          </span>

          <span data-text-preloader="A" class="letters-loading">
            A
          </span>

          <span data-text-preloader="D" class="letters-loading">
            D
          </span>

          <span data-text-preloader="I" class="letters-loading">
            I
          </span>

          <span data-text-preloader="N" class="letters-loading">
            N
          </span>

          <span data-text-preloader="G" class="letters-loading">
            G
          </span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>
  <!-- End preloader -->

  <!-- Header -->
  @include('includes.client.header')

  <!-- Sidebar -->
  @include('includes.client.sidebar')

  <!-- Content -->
  @yield('content')


  <!-- Footer -->
  @include('includes.client.footer')

  <button id="scroll__top" class="active"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"></path>
    </svg></button>


  <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="/assets/vendor/owl.carousel.min.js"></script>
  <script src="/assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
  <script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="/assets/admin/vendors/js/toastr.min.js"></script>

  <script src="/assets/js/hs.core.js"></script>
  <script src="/assets/js/components/hs.unfold.js"></script>
  <script src="/assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="/assets/js/components/hs.header.js"></script>
  <script src="/assets/js/components/hs.selectpicker.js"></script>
  <script src="/assets/js/components/hs.show-animation.js"></script>


  <script>
    const preLoader = function() {
      let preloaderWrapper = document.getElementById('preloader');
      window.onload = () => {
        preloaderWrapper.classList.add('loaded');
      };
    };
    preLoader();
    const scrollTop = document.getElementById('scroll__top');
    scrollTop &&
      (scrollTop.addEventListener('click', function() {
          window.scroll({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }),
        window.addEventListener('scroll', function() {
          window.scrollY > 300 ?
            scrollTop.classList.add('active') :
            scrollTop.classList.remove('active');
        }));
    $(document).on('ready', function() {
      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of slick carousel
      // $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // init zeynepjs
      var zeynep = $('.zeynep').zeynep({
        onClosed: function() {
          // enable main wrapper element clicks on any its children element
          $("body main").attr("style", "");

          console.log('the side menu is closed.');
        },
        onOpened: function() {
          // disable main wrapper element clicks on any its children element
          $("body main").attr("style", "pointer-events: none;");

          console.log('the side menu is opened.');
        }
      });

      // handle zeynep overlay click
      $(".zeynep-overlay").click(function() {
        zeynep.close();
      });

      // open side menu if the button is clicked
      $(".cat-menu").click(function() {
        if ($("html").hasClass("zeynep-opened")) {
          zeynep.close();
        } else {
          zeynep.open();
        }
      });
    });
  </script>
  <!-- AngularJS -->
  <script src="/assets/js/angular.min.js"></script>
  <script src="/assets/js/dirPagination.js"></script>
  <script src="/assets/js/controllers/initializationController.js"></script>
  <script src="/assets/js/controllers/client/headerController.js"></script>
  <script src="/assets/js/controllers/client/accountController.js"></script>
  <script src="/assets/js/angular-ckeditor.js"></script>
  <script src="/assets/js/components/hs.owl-carousel.js"></script>
  @yield('js')

</body>

</html>