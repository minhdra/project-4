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
  });

  // Get best seller
  connect_api('get', baseApi + nameChild + 'getBestSeller', (response) => {
    $scope.dataBestSeller = [];
    response.data.forEach((item) => {
      if (item.order_details.length > 0) {
        item.detailsLength = item.order_details.length;
        if($scope.dataBestSeller.length > 9) return;
        $scope.dataBestSeller.push(item);
      }
    });
    $scope.dataBestSeller.sort((a, b) => b.detailsLength - a.detailsLength);
  });
}
