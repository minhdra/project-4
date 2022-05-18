app.controller('accountController', accountController);
function accountController($scope, $http) {
  $scope.customer_id =
    sessionStorage.getItem('user') || localStorage.getItem('user');
  $scope.checkRemember = false;
  $scope.loginModel = {};
  $scope.registerModel = {};

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

  $scope.login = () => {
    connect_api(
      'POST',
      baseApi + nameAccount + 'login',
      $scope.loginModel,
      function (res) {
        if (res.data.id) {
          showAlert('success');
          setTimeout(() => {
            if ($scope.checkRemember)
              localStorage.setItem('customer', res.data.id);
            else
              sessionStorage.setItem('customer', JSON.stringify(res.data.id));
            location.reload();
          }, 1000);
        } else toastr.error('Username or password incorrect 👀');
      }
    );
  };

  $scope.register = () => {
    connect_api(
      'POST',
      baseApi + nameAccount + 'register',
      $scope.registerModel,
      function (res) {
        console.log(res);
        if (res.data === 'true') {
          toastr.success('Register success 🐱‍🏍');
          $scope.registerModel = {};
        } else {
          toastr.error('Username already 🤷‍♀️');
        }
      }
    );
  };

  // Change state remember
  $scope.changedRemember = (state) => {
    $scope.checkRemember = state;
  };
}
