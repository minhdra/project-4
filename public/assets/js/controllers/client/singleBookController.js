const nameBooks = 'books/'

app.controller('singleBookController', singleBookController);
function singleBookController($scope, $http) {
  $scope.book_id = $('#book-id').val();
  $scope.quantity = 1;
  
  const connect_api = function (method, url, data, callback) {
    const params = {};
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
    connect_api('GET', baseApi + nameBooks + $scope.book_id, null, function (res) {
      $scope.item = res.data.book;
      console.log(res.data);
    })
  }

  // Change quantity
  $scope.changeQuantity = (index) => {
    if (index === 0)
    {
      if ($scope.quantity > 1)
        $scope.quantity--;
    }
    else
      $scope.quantity++;
  }
}
