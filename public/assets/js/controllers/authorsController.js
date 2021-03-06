
const nameController = 'authors/';
const nameChild = 'child/';
app.controller('authorsController', authorsController);
function authorsController($scope, $http) {
  //set begin
  $scope.currentPage = 1;
  $scope.item;
  const modalE = $('#large');
  //get all authors
  $http({
    method: 'GET',
    url: baseApi + nameController,
  }).then(
    function (response) {
      $scope.data = response.data;
      console.log(response.data);
    },
    (error) => console.log(error)
  );
  // open modal
  $scope.openModal = function (id) {
    // CKEDITOR.replace( 'des' );
    $scope.id = id;
    if (id == 0) {
      $scope.modalTitle = 'Thêm tác giả mới';
      $scope.item = null;
    } else {
      $scope.modalTitle = 'Chỉnh sửa thông tin tác giả';
      $http({
        method: 'GET',
        url: baseApi + nameController + id,
      }).then(
        function (response) {
          $scope.item = response.data;
        },
        (error) => console.log(error)
      );
    }
    modalE.modal('show');
  };
  // Save data from modal
  $scope.saveData = function () {
    //Insert
    if ($scope.id == 0) {
      $http({
        method: 'POST',
        url: baseApi + nameController,
        data: $scope.item,
        'content-Type': 'application/json',
      }).then(
        function (response) {
          console.log(response);
          $scope.data.push(response.data);
          showAlert(successStatus);
          modalE.modal('hide');
        },
        (error) => {
          console.log(error);
          showAlert(errorStatus);
        }
      );
    } else {
      //Update
      $http({
        method: 'PUT',
        url: baseApi + nameController + $scope.id,
        data: $scope.item,
        'content-Type': 'application/json',
      }).then(
        function (response) {
          $scope.message = response.data;
          const index = $scope.data.findIndex(item => item.id == $scope.id);
          $scope.data[index] = $scope.item;
          showAlert(successStatus);
          modalE.modal('hide');
        },
        (error) => {
          console.log(error);
          showAlert(errorStatus);
        }
      );
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
          // location.reload();
          $scope.data.splice($scope.data.findIndex(item=>item.id==id),1)
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
