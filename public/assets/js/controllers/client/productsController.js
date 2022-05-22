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
        $scope.data.forEach((book)=>{
          var tmp_array = [];
          if(book.genres!=null){
            book.genres_app = JSON.parse(book.genres)
            var i=0;
            for(var i =0;i<book.genres_app.length;i++){
              tmp_array.push(book.genres_app[i].tag)
            }
            book.genres_app=tmp_array;
          }
          
        })
        $scope.root = $scope.data;
      })
    } else
    {
      connect_api('GET', baseApi + nameBooks, null, function (res) {
        $scope.data = res.data.books;
        $scope.data.forEach((book)=>{
          var tmp_array = [];
          if(book.genres!=null){
            book.genres_app = JSON.parse(book.genres)
            var i=0;
            for(var i =0;i<book.genres_app.length;i++){
              tmp_array.push(book.genres_app[i].tag)
            }
            book.genres_app=tmp_array;
          }
          
        })
        console.log($scope.data);
        $scope.root = $scope.data;
      })
    }
  }
  $scope.loadData();

  // Filter by price
  $scope.handleChangePriceFilter = () => {
    switch ($scope.priceFilter) {
      case "0":
        $scope.data = $scope.root;
        break;
      case "1":
        $scope.data = $scope.root.filter(item => item.prices.price < 100000);
        break;
      case "2":
        $scope.data = $scope.root.filter(item => item.prices.price >= 100000 && item.prices.price < 200000);
        break;
      default:
        break;
    }
  }
}