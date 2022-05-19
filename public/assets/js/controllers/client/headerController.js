const nameAccount = 'customers/';
let nameCartDetail = 'cart_details/';
app.controller('headerController', headerController);
function headerController($rootScope, $http) {
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
        // showAlert(errorStatus);
      }
    );
  };
  $rootScope.customer = {};
  $rootScope.check = checkCustomerLogin();
  $rootScope.total = 0;

  // Get customer
  $rootScope.loadCart = () => {
    if ($rootScope.check) {
      connect_api(
        'GET',
        baseApi + nameAccount + $rootScope.check,
        null,
        function (res) {
          console.log(res.data)
          $rootScope.customer = res.data;
          $rootScope.countTotal();
        }
      );
    }
  };
  $rootScope.loadCart();

  $rootScope.loadDropdownCategories = () => {
    $rootScope.selectedCategory = 0;
    connect_api('GET', baseApi + 'categories', null, function (res) {
      // const all = {
      //   id: 0,
      //   name: 'All'
      // }
      $rootScope.categories = [...res.data.categories];
    });
  }
  $rootScope.loadDropdownCategories();

  // Search
  $rootScope.search = () => {
    location.href = `/shop?category=${$rootScope.selectedCategory}&keyword=${$rootScope.keyword}`;
  }

  // Count total
  $rootScope.countTotal = () => {
    $rootScope.total = 0;
    $rootScope.total = $rootScope.customer.cart_details.reduce(
      (prev, cur) => prev + cur.single_price * cur.quantity,
      $rootScope.total
    );
  };

  // Increase or decrease the count
  $rootScope.changedCount = (check, index) => {
    $rootScope.customer.cart_details[index].quantity;
    if (check === 0) $rootScope.customer.cart_details[index].quantity++;
    else {
      if ($rootScope.customer.cart_details[index].quantity > 1)
        $rootScope.customer.cart_details[index].quantity--;
    }

    connect_api(
      'PUT',
      baseApi + nameCartDetail + $rootScope.customer.cart_details[index].id,
      $rootScope.customer.cart_details[index],
      function (res) {
        $rootScope.countTotal();
      }
    );
  };

  // Remove
  $rootScope.remove = (id, index) => {
    var hoi = confirm('Bạn có muốn xóa thật không?');
    // console.log($scope.id);
    if (hoi)
    {
      connect_api('DELETE', baseApi + nameCartDetail + id, null, function (res) {
        $rootScope.customer.cart_details.splice(index, 1);
        $rootScope.countTotal();
        toastr.success('Xóa thành công');
      });
    }
  };

  // Show modal login
  $rootScope.showLogin = () => {
    $('#sidebarNavToggler').click();
  }


}
