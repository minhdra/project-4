const nameDeliveryAddress = 'delivery_addresses/';
let nameOrders = 'orders/';
let nameCustomer = 'customers/';
app.controller('customerController', customerController);
function customerController($scope, $http) {
  $scope.itemsPerPage = 10;
  $scope.currentPage = 1;
  $scope.sidebarIndex = 0;
  $scope.cities = [];
  $scope.districts = [];
  $scope.communes = [];
  $scope.status = 0;
  $scope.checkType = 0;
  $scope.typeAddress = 'Nhà riêng';
  $scope.serial = 1;
  $scope.indexCount = function (newPageNumber) {
    $scope.serial = newPageNumber * 10 - 9;
  };
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
  $scope.customer = {};
  $scope.check = checkCustomerLogin();

  $scope.loadData = () => {
    if ($scope.check) {
      connect_api(
        'GET',
        baseApi + nameCustomer + $scope.check,
        null,
        function (res) {
          $scope.customer = res.data;
          $scope.getStatus($scope.customer.orders);
        }
      );
    } else {
      history.back();
    }
  };

  $scope.getStatus = (orders) => {
    orders.forEach((item) => {
      switch (item.flag) {
        case 0:
          return (item.flag = 'Cancelled');

        case 1:
          return (item.flag = 'Wait confirm');

        case 2:
          return (item.flag = 'Confirmed');

        case 3:
          return (item.flag = 'Taking stuff');

        case 4:
          return (item.flag = 'Took stuff success');

        case 5:
          return (item.flag = 'Delivering');

        case 6:
          return (item.flag = 'Delivered success');

        default:
          break;
      }
    });
  };

  $scope.logout = () => {
    sessionStorage.removeItem('customer');
    localStorage.removeItem('customer');
  };

  $scope.sidebarClick = (item) => {
    $scope.sidebarIndex = item.id;
    if (item.logout) {
      item.logout();
    }
  };

  $scope.showDetails = (id) => {
    $('#modalOrder').modal('show');
    connect_api('GET', baseApi + nameOrders + id, null, function (res) {
      $scope.order = res.data;
    });
  };

  // show modal update delivery address
  $scope.showUpdateDeliveryAddress = (item) => {
    $('#modal2').modal('show');
    $scope.customer.id=null;
    $scope.full_name=null;
    $scope.phone=null;
    $scope.city_code=null;
    $scope.district_code=null;
    $scope.commune=null;
    $scope.specific_address=null;
    $scope.typeAddress = 'Nhà riêng';
    $scope.status = 0;
    // Get all cities
    if (!item) {
      $scope.modelTitleAddress = 'Thêm địa chỉ';
      $scope.isCreate = true;
      connect_api(
        'GET',
        '/assets/hanhchinhvn/tinh_tp.json',
        null,
        function (res) {
          $scope.cities = Object.values(res.data);
        }
      );
    } else {
      $scope.modelTitleAddress = 'Cập nhật địa chỉ';
      $scope.isCreate = false;
      $scope.address_id = item.id;
      connect_api(
        'GET',
        '/assets/hanhchinhvn/tinh_tp.json',
        null,
        function (res) {
          $scope.cities = Object.values(res.data);
          $scope.full_name = item.full_name;
          $scope.phone = Number.parseInt(item.phone);
          $scope.specific_address = item.specific_address;
          $scope.typeAddress = item.type;
          $scope.checkType = item.type == $scope.typeAddress ? 0 : 1;
          $scope.status = Number.parseInt(item.status);
          const city = $scope.cities.filter(
            (i) => i.name_with_type == item.province
          )[0];
          $scope.city_code = city?.code;
          $scope.city = city?.name_with_type;
        }
      );
      connect_api(
        'GET',
        '/assets/hanhchinhvn/quan_huyen.json',
        null,
        function (res) {
          $scope.changeCity();
          const district = Object.values(res.data).filter(
            (i) => i.name_with_type == item.district
          )[0];
          $scope.district = district.name_with_type;
          $scope.district_code = district.code;
        }
      );
      connect_api(
        'GET',
        '/assets/hanhchinhvn/xa_phuong.json',
        null,
        function (res) {
          $scope.changeDistrict();
          const commune = Object.values(res.data).filter(
            (i) => i.name_with_type == item.commune
          )[0];
          $scope.commune = commune.name_with_type;
          $scope.commune_code = district.code;
        }
      );
    }
  };

  // Handle event change city
  $scope.changeCity = () => {
    connect_api(
      'GET',
      '/assets/hanhchinhvn/quan_huyen.json',
      null,
      function (res) {
        $scope.districts = Object.values(res.data).filter(
          (item) => item.parent_code === $scope.city_code
        );
        $scope.city = $scope.cities.filter(
          (item) => item.code === $scope.city_code
        )[0]?.name_with_type;
      }
    );
  };
  // Handle event change district
  $scope.changeDistrict = () => {
    connect_api(
      'GET',
      '/assets/hanhchinhvn/xa_phuong.json',
      null,
      function (res) {
        $scope.communes = Object.values(res.data).filter(
          (item) => item.parent_code === $scope.district_code
        );
        $scope.district = $scope.districts.filter(
          (item) => item.code === $scope.district_code
        )[0]?.name_with_type;
      }
    );
  };
  // Get type delivery address
  $scope.getTypeAddress = (ev) => {
    $scope.typeAddress = ev.target.innerText;
  };
  // Insert or update delivery address
  $scope.saveDeliveryAddress = () => {
    // Create model delivery address
    const delivery = {
      customer_id: $scope.customer.id,
      full_name: $scope.full_name,
      phone: $scope.phone,
      province: $scope.city,
      district: $scope.district,
      commune: $scope.commune,
      specific_address: $scope.specific_address,
      type: $scope.typeAddress,
      status: $scope.status | ($scope.status != 0) ? 1 : 0,
    };
    if ($scope.isCreate) {
      connect_api(
        'POST',
        baseApi + nameDeliveryAddress,
        delivery,
        function (res) {
          // if ($scope.delivery_address.status === 1)
          //   $scope.delivery_address = res.data;
          $scope.loadData();
          $('#modal2').modal('hide');
        }
      );
    } else {
      connect_api(
        'PUT',
        baseApi + nameDeliveryAddress + $scope.address_id,
        delivery,
        function (res) {
          // if ($scope.delivery_address.status === 1)
          //   $scope.delivery_address = res.data;
          $scope.loadData();
          $('#modal2').modal('hide');
        }
      );
    }
  };

  // Remove delivery address
  $scope.removeDeliveryAddress = (id) => {
    const ask = 'Are you sure you want to remove?';
    if (confirm(ask))
      connect_api(
        'DELETE',
        baseApi + nameDeliveryAddress + id,
        null,
        function (res) {
          toastr.success('Remove success');
          $scope.loadData();
        }
      );
  };
}
