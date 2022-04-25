const baseApi = 'http://localhost:8000/api/';
const nameController = 'books/';
const categoryController = 'categories/';
const publishersController = 'publishers/';
const book_languagesController = 'book_languages/';
const nameChild = 'child/';
const successStatus = 'success';
const errorStatus = 'danger';

app.controller('booksController', booksController);
function booksController($scope, $http) {
  //set begin
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.book = [];
  $scope.image = '';
  $scope.pdf_src = '';
  //set begin
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
  //get drop down categories
  $http({
    method: 'GET',
    url: baseApi + categoryController,
  }).then(function (response) {
    $scope.categories = response.data.categories;
  });
  //get drop down publishers
  $http({
    method: 'GET',
    url: baseApi + publishersController,
  }).then(function (response) {
    $scope.publishers = response.data.publishers;
  });
  //get drop down book_languages
  $http({
    method: 'GET',
    url: baseApi + book_languagesController,
  }).then(function (response) {
    $scope.book_languages = response.data.book_languages;
  });

  var uploadFile = function (filedata, type = 'img') {
    if (type == 'img') {
      var imgtype = filedata.type;
      var reader = new FileReader();
      reader.onload = function (ev) {
        $('#img_prv')
          .attr('src', ev.target.result)
          .css('width', '150px')
          .css('height', '150px');
      };
      reader.readAsDataURL(filedata);
      $scope.image = filedata.name;
    } else {
      $scope.pdf_src = filedata.name;
    }
    //upload
    var postData = new FormData();
    postData.append('file', filedata);
    postData.append('type', type);

    $.ajax({
      headers: { 'X-CSRF-Token': $('meta[name=csrf_token]').attr('content') },
      async: true,
      type: 'post',
      contentType: false,
      processData: false,
      url: baseApi + 'book/upload',
      data: postData,
      success: function (res) {
        console.log('success');
      },
      error: function (res) {
        console.log('loi');
      },
    });
  };

  $scope.openModal = function (id) {
    // CKEDITOR.replace( 'des' );
    $scope.id = id;
    if (id == 0) {
      $scope.modalTitle = 'Thêm sách mới';
      $scope.book = null;
    } else {
      $scope.modalTitle = 'Chỉnh sửa thông tin sách';
      $http({
        method: 'GET',
        url: baseApi + nameController + id,
      }).then(
        function (response) {
          $scope.book = response.data.book;
          $scope.book.publisherID = String($scope.book.publisherID);
          $scope.book.languageID = String($scope.book.languageID);
          $scope.book.categoryID = String($scope.book.categoryID);
          console.log($scope.book);
          if ($scope.book.publish_date)
            $scope.book.publish_date = new Date($scope.book.publish_date);
        },
        (error) => console.log(error)
      );
    }
    $('#large').modal('show');
  };

  $scope.deleteClick = function (id) {
    var hoi = confirm('Ban co muon xoa that khong');
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
  $scope.saveData = function () {
    if ($scope.book.publish_date)
      $scope.book.publish_date = convertDate($scope.book.publish_date);
    //dang them moi sp
    $scope.book.image = $scope.image ? $scope.image : $scope.book.image;
    $scope.book.pdf_src = $scope.pdf_src;
    if ($scope.id == 0) {
      $http({
        method: 'POST',
        url: baseApi + nameController,
        data: $scope.book,
        'content-Type': 'application/json',
      }).then(
        function (response) {
          console.log(response);
          location.reload();
          showAlert(successStatus);
        },
        (error) => {
          console.log(error);
          showAlert(errorStatus);
        }
      );
    } else {
      //sua san pham
      $http({
        method: 'PUT',
        url: baseApi + nameController + $scope.id,
        data: $scope.book,
        'content-Type': 'application/json',
      }).then(
        function (response) {
          $scope.message = response.data;
          console.log(response.data);
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

  $('#img_file_upid').on('change', function (ev) {
    var filedata = this.files[0];
    uploadFile(filedata);
  });

  $('#pdf_file_upid').on('change', function (ev) {
    var filedata = this.files[0];
    uploadFile(filedata, 'pdf');
  });
}
