const baseApi = 'http://localhost:8000/api/';
const nameController = 'books/';
const nameChild = 'child/';

app.controller('booksController', booksController);
function booksController($scope, $http) {
  $scope.currentPage = 1;
  $scope.pageSize = 10;

  $http({
    method: 'GET',
    url: baseApi + nameController
  }).then(function (response) {
    $scope.data = response.data;
    console.log(response.data);
  }, error => console.log(error))


  $scope.openModal = function(id) {
    // CKEDITOR.replace( 'des' );
    $scope.id = id;
    if (id == 0) {
        $scope.modalTitle = "Thêm sách mới";
        // $scope.product = null;
    } else {
        $scope.modalTitle = "Chỉnh sửa thông tin sách";
        // $http({
        //     method: "GET",
        //     url: "http://localhost:8000/api/products/" + id
        // }).then(function(response) {
        //     $scope.product = response.data[0];
        //     $scope.product.id_loai_sp +='';
        //     $scope.product.id_ncc +='';
        //     console.log($scope.product)
        //     CKEDITOR.replace( 'product.mota_sp' );
        // });
    }
    $('#large').modal('show');
  }

  $scope.deleteClick = function(id) {
    // var hoi = confirm("Ban co muon xoa that khong");
    // if (hoi) {
    //     $http({
    //         method: "DELETE",
    //         url: "http://localhost:8000/api/products/" + id
    //     }).then(function(response) {
    //         $scope.message = response.data;
    //         location.reload();
    //     });
    // }
}
  $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            // $http({
            //     method: "POST",
            //     url: "http://localhost:8000/api/products",
            //     data: $scope.product,
            //     "content-Type": "application/json"
            // }).then(function(response) {
            //     $scope.message = response.data;
            //     console.log(response.data);
            //     location.reload();
            // });
        } else { //sua san pham
            // $http({
            //     method: "PUT",
            //     url: "http://localhost:8000/api/products/" + $scope.id,
            //     data: $scope.product,
            //     "content-Type": "application/json"
            // }).then(function(response) {
            //     $scope.message = response.data;
            //     console.log(response.data);
            //     location.reload();

            // });
        }
    }
}