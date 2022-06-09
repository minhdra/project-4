const nameController = 'books/';
const categoryController = 'categories/';
const publishersController = 'publishers/';
const book_languagesController = 'book_languages/';
const authorsController = 'authors/';
const nameChild = 'book/';

app.controller('homeController', homeController);
function homeController($scope, $http) {
  //set begin
  $scope.finding = '';
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.book = [];
  $scope.books = [];
  //set begin
  var connect_api = function (method, url, callback) {
    $http({
      method: method,
      url: url,
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
  var connect_api_data = function (method, url, data, callback) {
    $http({
      method: method,
      url: url,
      data: data,
      'content-Type': 'application/json',
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
  //set begin
  $scope.loadData = () => {
    //get books
    connect_api('get', baseApi + nameController, (response) => {
      $scope.books = response.data.books;
      $scope.books.forEach((book) => {
        var tmp_array = [];
        if (book.genres != null) {
          book.genres_app = JSON.parse(book.genres);
          var i = 0;
          for (var i = 0; i < book.genres_app.length; i++) {
            tmp_array.push(book.genres_app[i].tag);
          }
          book.genres_app = tmp_array;
        }
      });
    });

    // Get newest
    connect_api('get', baseApi + nameChild + 'getNewest', (response) => {
      $scope.dataNewest = response.data;
      // console.log($scope.dataNewest);
    });

    // Get slider
    connect_api('get', baseApi + 'slides', function (response) {
      $scope.slides = response.data.slides;
    });
  };
  $scope.loadSlides = () => {
    // Get best seller
    connect_api('get', baseApi + nameChild + 'getBestSeller', (response) => {
      // console.log(response.data);
      $scope.dataBestSeller = [];
      response.data.forEach((item) => {
        if (item.order_details.length > 0) {
          item.detailsLength = item.order_details.length;
          if ($scope.dataBestSeller.length > 9) return;
          $scope.dataBestSeller.push(item);
        }
      });
      $scope.dataBestSeller.sort((a, b) => b.detailsLength - a.detailsLength);
      // console.log($scope.dataBestSeller);
    });
  };
}

app
  .directive('owlCarousel', [
    '$timeout',
    function ($timeout) {
      return {
        restrict: 'E',
        transclude: false,
        link: function (scope) {
          scope.initCarousel = function (element) {
            $timeout(function () {
              // provide any default options you want
              var defaultOptions = {
                nav: false,
                dots: true,
                items: 1,
                autoplay: true,
                autoplayTimeout:5000,
                autoplayHoverPause: true,
                margin: 15,
                navText: [
                  '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                  '<i class="fa fa-angle-right" aria-hidden="true"></i>',
                ],
              };
              var customOptions = scope.$eval($(element).attr('data-options'));
              // combine the two options objects
              for (var key in customOptions) {
                defaultOptions[key] = customOptions[key];
              }
              // init carousel
              $(element).owlCarousel(defaultOptions);
            }, 50);
          };
        },
      };
    },
  ])
  .directive('owlCarouselItem', [
    function () {
      return {
        restrict: 'A',
        transclude: false,
        link: function (scope, element) {
          // wait for the last item in the ng-repeat then call init
          if (scope.$last) {
            scope.initCarousel(element.parent());
          }
        },
      };
    },
  ]);
