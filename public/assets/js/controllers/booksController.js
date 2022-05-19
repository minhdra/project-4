const nameController = 'books/';
const categoryController = 'categories/';
const publishersController = 'publishers/';
const book_languagesController = 'book_languages/';
const nameChild = 'child/';





app.controller('booksController', booksController);
function booksController($scope, $http) {
  //set begin
  
  $scope.finding = '';
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.book = [];
  $scope.image = '';
  $scope.pdf_src = '';
  $scope.books = [];
  const modalE = $('#large');
  //set begin
  var connect_api = function (method,url,callback) { 
    $http({
      method: method,
      url: url,
    }).then(
      function (response) {
        callback(response);
      },
      (error) => {console.log(error);showAlert(errorStatus);}
    );
   }
  var connect_api_data = function (method,url,data,callback) { 
    $http({
      method: method,
      url: url,
      data: data,
      'content-Type': 'application/json',
    }).then(
      function (response) {
        callback(response);
      },
      (error) => {console.log(error);showAlert(errorStatus);}
    );
   }
  function uploadFile (filedata, type = 'img') {
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
  //set begin
  //get books
  connect_api('get',baseApi + nameController,(response)=>{
    $scope.books = response.data.books;
    $scope.books.forEach((book)=>{
      var tmp_array = [];
      if(book.genres!=null){
        book.genres_app = JSON.parse(book.genres)
        var i=0;
        for(var i =0;i<book.genres_app.length;i++){
          tmp_array.push(book.genres_app[i].tag)
        }
        book.genres_app=tmp_array;
      }
      
    })
    console.log($scope.books);
  })

  //get drop down categories
  connect_api('get',baseApi + categoryController,(response)=>{
    $scope.categories = response.data.categories;
  })

  //get drop down publishers
  connect_api('get',baseApi + publishersController,(response)=>{
    $scope.publishers = response.data.publishers;
  })
  //get drop down book_languages
  connect_api('get',baseApi + book_languagesController,(response)=>{
    $scope.book_languages = response.data.book_languages;
  })

  $scope.openModal = function (id,book) {
    $scope.text = {
      textInput : '',
      options: {
        language: 'en',
        allowedContent: true,
        entities: false
      }
    };
    $scope.id = id;
    if (id == 0) {
      $scope.modalTitle = 'Thêm sách mới';
      $scope.book = null;
      $("#genres").tagging( "reset" );
      // $scope.book.publisherID = "1";
      // $scope.book.languageID ="1";
      // $scope.book.categoryID ="1";
    } else {
      
      $("#genres").tagging( "reset" );
      $scope.modalTitle = 'Chỉnh sửa thông tin sách';
    // connect_api('get',baseApi + nameController + id,(response)=>{
    // $scope.book = response.data.book;
        $scope.book = book;
        $scope.book.publisherID = String ($scope.book.publisherID);
        $scope.book.languageID = String ($scope.book.languageID);
        $scope.book.categoryID = String ($scope.book.categoryID);

        $("#genres").tagging( "add",$scope.book.genres_app);

        $scope.book.price = $scope.book.prices?.price;
        $scope.book.publish_date = new Date($scope.book.publish_date);
        $scope.text.textInput = $scope.book.description;
      // })
    }
    modalE.modal('show');
  };

  $scope.deleteClick = function (book) {
    var hoi = confirm('Bạn có muốn xóa thật không?');
    // console.log($scope.id);
    if (hoi) {
      $http({
        method: 'DELETE',
        url: baseApi + nameController + book.id,
      }).then(
        function (response) {
          $scope.books.splice($scope.books.indexOf(book),1)
          showAlert(successStatus);
        },
        (error) => {
          console.log(error);
          showAlert(errorStatus); 
        }
      );
    }
  };

  var convert_to_json = function (array) {  
    if(array != []){
      result=`[`
      for(var i = 0 ;i<array.length;i++){
        var element = array[i];
        tmp_json = `{"tag":"`+element+`"},`
        result+=tmp_json;
      }
      if(result != '['){
        result = result.substring(0,result.length-1);
      }
      result+=']'
      return result;
    }
  }
  
  $scope.saveData = function () {
    tags = $("#genres").tagging('getTags');
    json = convert_to_json(tags);
    // console.log(json);
    //dang them moi sp
    $scope.book.image = $scope.image ? $scope.image : $scope.book.image;
    $scope.book.pdf_src = $scope.pdf_src;

    $scope.book.description = $scope.text.textInput;
    for(i = 0 ; i < $scope.publishers.length;i++){
      if($scope.publishers[i].id==$scope.book.publisherID){
        $scope.book.publishers = $scope.publishers[i]
      }
    }
    for(i = 0 ; i < $scope.book_languages.length;i++){
      if($scope.book_languages[i].id==$scope.book.languageID){
        $scope.book.book_languages = $scope.book_languages[i]
      }
    }
    for(i = 0 ; i < $scope.categories.length;i++){
      if($scope.categories[i].id==$scope.book.categoryID){
        $scope.book.categories = $scope.categories[i]
      }
    }
    var price = parseInt($scope.book.price);
  
    // $scope.book.price.price = price;
    $scope.book.prices = {};
    $scope.book.prices.price = price;
    $scope.book.description = $scope.text.textInput;
    $scope.book.genres_app = tags;
    $scope.book.genres = json;
    if ($scope.id == 0) {
      // them san pham
      connect_api_data('POST',baseApi + nameController,$scope.book,(response)=>{
        //add id to book
        $scope.book.id = response.data.id;
        $scope.books.push($scope.book)
        // location.reload();
        showAlert(successStatus);
        modalE.modal('hide');
      })
    } else {
      //sua san pham
      connect_api_data('PUT',baseApi + nameController + $scope.id,$scope.book,(response)=>{
        console.log(response);
        // location.reload();
        showAlert(successStatus);
        modalE.modal('hide');
      })
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
