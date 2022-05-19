const nameBooks = 'books/';
let nameCart = 'carts/';

app.controller('singleBookController', singleBookController);
function singleBookController($rootScope, $scope, $http) {
  $scope.book_id = $('#book-id').val();
  $scope.quantity = 1;
  
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
    connect_api('GET', baseApi + nameBooks + $scope.book_id, null, function (res) {
      $scope.item = res.data.book;
      console.log(res.data);
      $("#des-single").html($scope.item.description);
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

  // Add to cart
  $scope.addCart = () => {
    const customer_id = checkCustomerLogin();

    $scope.detail = {
      book_id: $scope.item.id,
      quantity: $scope.quantity,
      single_price:
        $scope.item.prices.price || 0,
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
