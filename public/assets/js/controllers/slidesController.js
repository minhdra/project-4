const nameController = 'slides/';
const nameChild = 'slide/';

app.controller('slidesController', slidesController);
function slidesController($scope, $http) {
  //set begin
  $scope.title = 'Quản lý slides';
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.item;
  //get all slides
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

  $scope.loadData = () => {
    connect_api('GET', baseApi + nameController, function (res) {
      $scope.data = res.data.slides;
    });
  };
  $scope.loadData();
  // open modal
  $scope.openModal = function (id) {
    // CKEDITOR.replace( 'des' );
    $scope.id = id;
    if (id == 0) {
      $scope.modalTitle = 'Thêm slide mới';
      $scope.book = null;
    } else {
      $scope.modalTitle = 'Chỉnh sửa thông tin slide';
      connect_api('GET', baseApi + nameController + id, function (res) {
        $scope.item = res.data;
      })
    }
    $('#large').modal('show');
  };
  // Save data from modal
  $scope.saveData = function () {
    //Insert
    if ($scope.id == 0)
    {
      connect_api_data('POST', baseApi + nameController, $scope.item, function (res) {
        $scope.data.unshift(res.data);
        showAlert('success');
      })
    } else {
      //Update
      connect_api_data('POST', baseApi + nameController + $scope.id, $scope.item, function (res) {
        const index = $scope.data.findIndex(x=>x.id == $scope.id);
        $scope.data.splice(index, 1);
        $scope.data.unshift(res.data);
        showAlert('success');
      })
    }
  };
  // Delete
  $scope.deleteClick = function (id) {
    var hoi = confirm('Bạn có muốn xóa thật không?');
    // console.log($scope.id);
    if (hoi) {
      $http({
        method: 'DELETE',
        url: baseApi + nameController + id,
      }).then(
        function (response) {
          $scope.message = response.data;
          location.reload();
          showAlert(successStatus);
        },
        (error) => {
          console.log(error);
          showAlert(errorStatus);
        }
      );
    }
  };
}
