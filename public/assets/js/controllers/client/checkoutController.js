const nameCustomer = 'customers/';
const nameCustomerInfo = 'customer_infos/';
const nameDeliveryAddress = 'delivery_addresses/';
const nameOrder = 'orders/';

app.controller('checkoutController', checkoutController);
function checkoutController($scope, $http) {
  $scope.check = checkCustomerLogin();
  $scope.itemAddress = {};
  $scope.cities = [];
  $scope.districts = [];
  $scope.communes = [];
  $scope.typeAddress = 'Nhà riêng';
  $scope.status = 0;
  $scope.checkType = 0;
  $scope.order;
  // Check login when init

  // Define connect api
  var connect_api = function (method, url, data, callback) {
    if (data) {
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
        }
      );
    } else {
      $http({
        method: method,
        url: url,
        'content-Type': 'application/json',
      }).then(
        function (response) {
          callback(response);
          // showAlert('success');
        },
        (error) => {
          console.log(error);
        }
      );
    }
  };
  
  // Get customer
  $scope.loadData = () => {
    if ($scope.check)
    {
      connect_api('GET', baseApi + nameCustomer + $scope.check, null, function (res) {
        $scope.customer = res.data;
        $scope.customer.info = $scope.customer.info || {};
        // console.log($scope.customer);
        $scope.countTotal();
        if ($scope.customer.delivery_addresses.length > 0)
        {
          $scope.delivery_address = $scope.customer.delivery_addresses.filter(item => item.status === 1)[0];
        }
      })
    }
    else
    {
      location.href = '/';
    }
  }
  $scope.loadData();

  // Count total
  $scope.countTotal = () => {
    $scope.total = 0;
    $scope.total = $scope.customer.cart_details.reduce(
      (prev, cur) => prev + cur.single_price * cur.quantity,
      $scope.total
    );
  };

  // Update info
  $scope.updateInfo = (info) => {
    info.customer_id = $scope.customer.id;
    if (info.id)
    {
      connect_api('PUT', baseApi + nameCustomerInfo + info.id, info, function (res) {
        
      });
    }
    else
    {
      connect_api('POST', baseApi + nameCustomerInfo, info, function (res) {
        
      });
    }
  }

  // Show modal delivery address
  $scope.showDeliveryAddresses = () => {
    $('#modal2').modal('hide');
    $('#modal1').modal('show');
  }

  // show modal update delivery address
  $scope.showUpdateDeliveryAddress = (item) => {
    $('#modal1').modal('hide');
    $('#modal2').modal('show');
    // Get all cities 
    if (!item) {
      $scope.modalTitle = 'Add delivery address';
      $scope.isCreate = true;
      connect_api('GET', '/assets/hanhchinhvn/tinh_tp.json', null, function (res) {
        $scope.cities = Object.values(res.data);
      });
    }
    else
    {
      $scope.modalTitle = 'Update delivery address';
      $scope.isCreate = false;
      $scope.address_id = item.id;
      connect_api('GET', '/assets/hanhchinhvn/tinh_tp.json', null, function (res) {
        $scope.cities = Object.values(res.data);
        $scope.full_name = item.full_name;
        $scope.phone = Number.parseInt(item.phone);
        $scope.specific_address = item.specific_address;
        $scope.typeAddress = item.type_address;
        $scope.checkType = item.type_address == $scope.typeAddress ? 0 : 1;
        $scope.status = Number.parseInt(item.status);
        const city = $scope.cities.filter(i => i.name_with_type == item.province)[0];
        $scope.city_code = city?.code;
        $scope.city = city?.name_with_type;
      });
      connect_api('GET', '/assets/hanhchinhvn/quan_huyen.json', null, function (res) {
        $scope.changeCity();
        const district = Object.values(res.data).filter(i => i.name_with_type == item.district)[0];
        $scope.district = district.name_with_type;
        $scope.district_code = district.code;
      });
      connect_api('GET', '/assets/hanhchinhvn/xa_phuong.json', null, function (res) { 
        $scope.changeDistrict();
        const commune = Object.values(res.data).filter(i => i.name_with_type == item.commune)[0];
        $scope.commune = commune.name_with_type;
        $scope.commune_code = district.code;
      });
    }
  };

  // Handle event change city
  $scope.changeCity = () => {
    connect_api('GET', '/assets/hanhchinhvn/quan_huyen.json', null, function (res) {
      $scope.districts = Object.values(res.data).filter(item => item.parent_code === $scope.city_code);
      $scope.city = $scope.cities.filter(item => item.code === $scope.city_code)[0]?.name_with_type; 
    })
  }
  // Handle event change district
  $scope.changeDistrict = () => {
    connect_api('GET', '/assets/hanhchinhvn/xa_phuong.json', null, function (res) {
      $scope.communes = Object.values(res.data).filter(item => item.parent_code === $scope.district_code);
      $scope.district = $scope.districts.filter(item => item.code === $scope.district_code)[0]?.name_with_type; 
    })
  }
  // Get type delivery address
  $scope.getTypeAddress = (ev) => {
    $scope.typeAddress = ev.target.innerText;
  }
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
      type_address: $scope.typeAddress,
      status: $scope.status ? 1 : 0,
    }
    if ($scope.isCreate)
    {
      connect_api('POST', baseApi + nameDeliveryAddress, delivery, function (res) {
        if ($scope.delivery_address.status === 1)
          $scope.delivery_address = res.data;
        $scope.loadData();
        $('#modal2').modal('hide');
      });
    } else
    {
      connect_api('PUT', baseApi + nameDeliveryAddress + $scope.address_id, delivery, function (res) {
        if ($scope.delivery_address.status === 1)
          $scope.delivery_address = res.data;
        $scope.loadData();
        $('#modal2').modal('hide');
      })
    }
  }

  // Change default delivery
  $scope.changeDefault = (item) => {
    item.status = 1;
    connect_api('PUT', baseApi + nameDeliveryAddress + item.id, item, function (res) {
      // $scope.loadData();
      $scope.customer.delivery_addresses.forEach(address => {
        if (address.id === item.id)
        {
          $scope.delivery_address = res.data;
          address = res.data;
        }
        else
          address.status = 0;
      })
    })
  }

  // Close modal
  $scope.closeModal = () => {
    $('#modal2').modal('hide');
  }

  // Create order
  $scope.payment = () => {
    $scope.updateInfo($scope.customer.info);
    const delivery_address = [$scope.delivery_address.full_name, $scope.delivery_address.phone].join(', ') + ' - ' + [$scope.delivery_address.specific_address, $scope.delivery_address.commune, $scope.delivery_address.district, $scope.delivery_address.province].join(', ');
    const order = {
      delivery_address,
      customer_id: $scope.customer.id,
      total: $scope.total,
      details: $scope.customer.cart_details,
    }

    connect_api('POST', baseApi + nameOrder, order, function (res) {
      $scope.order = res.data;
      console.log($scope.order);
    });
  }
}