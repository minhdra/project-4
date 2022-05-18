const nameAccount = 'customers/';
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
        showAlert(errorStatus);
      }
    );
  };
  $rootScope.customer = {};
  $rootScope.check = checkCustomerLogin();

  $rootScope.loadCart = () => {
    if ($rootScope.check.id) {
      connect_api(
        'GET',
        baseApi + nameAccount + $rootScope.check.id,
        null,
        function (res) {
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
      console.log(res.data.categories);
      const all = {
        id: 0,
        name: 'All'
      }
      $rootScope.categories = [all, ...res.data.categories];
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
    connect_api('DELETE', baseApi + nameCartDetail + id, null, function (res) {
      $rootScope.customer.cart_details.splice(index, 1);
      $rootScope.countTotal();
    });
  };

  function checkCustomerLogin() {
    const request = JSON.parse(sessionStorage.getItem('customer')) || JSON.parse(localStorage.getItem('customer')) || {};
  
    return request;
  }
}
