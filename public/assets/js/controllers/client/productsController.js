const nameBooks = 'books/';

app.controller('productsController', productsController);
function productsController($scope, $http) {
  $scope.priceFilter = "0";
  $scope.search = {
    category_id: $('#category_id').val(),
    book_name: $('#keyword').val(),
  };
  const connect_api = function (method, url, data, callback) {
    let params = {};
    if(data) params = {data};
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
    if ($scope.search.book_name || $scope.search.category_id)
    {
      connect_api('POST', baseApi + nameBooks + 'search', $scope.search, function (res) {
        $scope.data = res.data;
        console.log(res.data);
      })
    } else
    {
      connect_api('GET', baseApi + nameBooks, null, function (res) {
        $scope.data = res.data.books;
      })
    }
  }
  $scope.loadData();

  // Filter by price
  $scope.handleChangePriceFilter = () => {
    console.log($scope.priceFilter);
  }
}