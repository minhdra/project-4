const baseApi = 'http://localhost:8000/api/';
const nameController = 'books/';
const categoryController = 'categories/'
const publishersController = 'publishers/'
const book_languagesController = 'book_languages/'
const nameChild = 'child/';

app.controller('booksController', booksController);
function booksController($scope, $http) {
  //set begin
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.book= [];
  //set begin
  $http({
    method: 'GET',
    url: baseApi + nameController
  }).then(function (response) {
    $scope.data = response.data;
    console.log(response.data);
  }, error => console.log(error))
  //get drop down categories
  $http({
      method: "GET",
      url:  baseApi + categoryController
  }).then(function(response) {
      $scope.categories = response.data.categories;
  });
  //get drop down publishers
  $http({
      method: "GET",
      url:  baseApi + publishersController
  }).then(function(response) {
      $scope.publishers = response.data.publishers;
  });
  //get drop down book_languages
  $http({
      method: "GET",
      url:  baseApi + book_languagesController
  }).then(function(response) {
      $scope.book_languages = response.data.book_languages;
  });


  var uploadFile = function(filedata,type='img'){
    if (type == 'img'){
      var imgtype=filedata.type;
      var reader=new FileReader();
      reader.onload=function(ev){
        $('#img_prv').attr('src',ev.target.result).css('width','150px').css('height','150px');
      }
      reader.readAsDataURL(filedata);
    }
    //upload
    var postData=new FormData();
    postData.append('file',filedata);   
    postData.append('type',type);   
    $.ajax({
      headers:{'X-CSRF-Token':$('meta[name=csrf_token]').attr('content')},
      async:true,
    type:"post",
    contentType:false,
    processData:false,
    url:baseApi+'book/upload',
    data:postData,
    success:function(res){
      console.log("success");
    },
    error:function(res){
      console.log('loi');
    }
    });
  }

  $scope.openModal = function(id) {
    // CKEDITOR.replace( 'des' );
    $scope.id = id;
    if (id == 0) {
        $scope.modalTitle = "Thêm sách mới";
        $scope.book = null;
    } else {
        $scope.modalTitle = "Chỉnh sửa thông tin sách";
        $http({
            method: "GET",
            url: baseApi + nameController + id
        }).then(function(response) {
          $scope.book = response.data.book;
          $scope.book.publisherID = String($scope.book.publisherID)
          $scope.book.languageID = String($scope.book.languageID)
          $scope.book.categoryID = String($scope.book.categoryID)
          console.log($scope.book);
        }, error => console.log(error));
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

    $('#img_file_upid').on('change',function(ev){
      var filedata=this.files[0];
      uploadFile(filedata);
    })

    $('#pdf_file_upid').on('change',function(ev){
      var filedata=this.files[0];
      uploadFile(filedata,'pdf');
    })
}

