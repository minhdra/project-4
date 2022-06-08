const nameBooks = 'books/';
let nameCart = 'carts/';
let nameChild = 'book/';

app.controller('singleBookController', singleBookController);
function singleBookController($rootScope, $scope, $http) {
  //
  var __PDF_DOC;
  var __CURRENT_PAGE;
  var __TOTAL_PAGES;
  var __PAGE_RENDERING_IN_PROGRESS = 0;
  var __CANVAS = $('#pdf-canvas').get(0);
  var __CANVAS_CTX = __CANVAS.getContext('2d');
  //
  $scope.book_id = $('#book-id').val();
  $scope.quantity = 1;

  const connect_api = function (method, url, data, callback) {
    let params = {};
    if (data) params = { data };
    $http({
      method: method,
      url: url,
      ...params,
    }).then(
      function (response) {
        callback(response);
      },
      (error) => {
        console.log(error);
        showAlert(errorStatus);
      }
    );
  };

  $scope.loadData = () => {
    connect_api(
      'GET',
      baseApi + nameBooks + $scope.book_id,
      null,
      function (res) {
        $scope.item = res.data.book;
        console.log(res.data.book);
        $('#des-single').html($scope.item.description);
      }
    );
  };

  // Get similar
  $scope.getSimilar = () => {
    connect_api('GET', baseApi + nameBooks, null, function (res) {
      $scope.similar = res.data.books.filter(
        (book) => book.categoryID === $scope.item.categoryID
      );
    });
  };

  // Open preview
  $scope.openPreview = () => {
    $('#previewModal').modal('show');
    if ($scope.item.pdf_src) {
      const pdf_url = `http://127.0.0.1:8000/assets/pdf/${$scope.item.pdf_src}`;
      // Show the pdf loader
      $('#pdf-loader').show();

      PDFJS.getDocument({ url: pdf_url })
        .then(function (pdf_doc) {
          __PDF_DOC = pdf_doc;
          __TOTAL_PAGES = __PDF_DOC.numPages;

          // Hide the pdf loader and show pdf container in HTML
          $('#pdf-loader').hide();
          $('#pdf-contents').show();
          $('#pdf-total-pages').text(__TOTAL_PAGES);

          // Show the first page
          showPage(1);
        })
        .catch(function (error) {
          // If error re-show the upload button
          $('#pdf-loader').hide();
          $('#upload-button').show();

          alert(error.message);
        });
    }
  };

  // Load and render a specific page of the PDF
  function showPage(page_no) {
    __PAGE_RENDERING_IN_PROGRESS = 1;
    __CURRENT_PAGE = page_no;

    // Disable Prev & Next buttons while page is being loaded
    $('#pdf-next, #pdf-prev').attr('disabled', 'disabled');

    // While page is being rendered hide the canvas and show a loading message
    $('#pdf-canvas').hide();
    $('#page-loader').show();

    // Update current page in HTML
    $('#pdf-current-page').text(page_no);

    // Fetch the page
    __PDF_DOC.getPage(page_no).then(function (page) {
      // As the canvas is of a fixed width we need to set the scale of the viewport accordingly
      var scale_required = __CANVAS.width / page.getViewport(1).width;

      // Get viewport of the page at required scale
      var viewport = page.getViewport(scale_required);

      // Set canvas height
      __CANVAS.height = viewport.height;

      var renderContext = {
        canvasContext: __CANVAS_CTX,
        viewport: viewport,
      };

      // Render the page contents in the canvas
      page.render(renderContext).then(function () {
        __PAGE_RENDERING_IN_PROGRESS = 0;

        // Re-enable Prev & Next buttons
        $('#pdf-next, #pdf-prev').removeAttr('disabled');

        // Show the canvas and hide the page loader
        $('#pdf-canvas').show();
        $('#page-loader').hide();
      });
    });
  }

  // Previous page of the PDF
  $('#pdf-prev').on('click', function () {
    if (__CURRENT_PAGE != 1) showPage(--__CURRENT_PAGE);
  });

  // Next page of the PDF
  $('#pdf-next').on('click', function () {
    if (__CURRENT_PAGE != __TOTAL_PAGES) showPage(++__CURRENT_PAGE);
  });

  // Change quantity
  $scope.changeQuantity = (index) => {
    if (index === 0) {
      if ($scope.quantity > 1) $scope.quantity--;
    } else $scope.quantity++;
  };

  // Add to cart
  $scope.addCart = () => {
    const customer_id = checkCustomerLogin();

    $scope.detail = {
      book_id: $scope.item.id,
      quantity: $scope.quantity,
      single_price: $scope.item.prices.price || 0,
      status: 1,
      image: $scope.item.image,
    };
    const cart = {
      customer_id,
      detail: $scope.detail,
    };

    if (!customer_id) {
      toastr.warning('Bạn cần đăng nhập để thực hiện chức năng này 🐲');
    } else {
      connect_api('POST', baseApi + nameCart, cart, function (res) {
        $rootScope.loadCart();
        toastr.success('Thêm thành công 🦉');
        // $('#modal1').removeClass('is-visible');
      });
    }
  };
}
