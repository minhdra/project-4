
const invoicesController = 'invoices/';
const booksController = 'books/';
const publishersController = 'publishers/';
const invoice_detailsController = 'invoice_details/';
const nameChild = 'child/';
 
app.controller('invoicesController', InvoicesController);
function InvoicesController($scope, $http) {

  const modalE = $('#large');

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
  //set begin
  $scope.finding = "";
  $scope.currentPage = 1;
  $scope.currentPage2 = 1;
  $scope.pageSize = 10;
  $scope.item;
  $scope.total_invoice = 0;
  //get all invoices
  connect_api('get',baseApi + invoicesController,(response)=>{
    $scope.data = response.data;
    $scope.data.forEach((item)=>{
      item.invoice_date = convertDate(item.invoice_date)
    })
    console.log($scope.data);
  })

  connect_api('get',baseApi + 'book/'+'get_basic',(response)=>{
    $scope.books = response.data.books;
  })

  connect_api('get',baseApi + publishersController,(response)=>{
    $scope.publishers = response.data.publishers;
  })
 
  // open modal
  $scope.openModal = function (id) {
    $scope.publisher = {};
    $scope.selected_invoice_details ={};
    // CKEDITOR.replace( 'des' );
    $scope.id = id;
    $scope.staffname = "";
    if (id == 0) {
      $scope.invoice_details = [];
      $scope.invoice = {};
      $scope.invoice.discount = 0;
      $scope.invoice.total = 0;
      $scope.publisher_name ="";
      //
      $scope.total_invoice = 0;
      //
      $scope.isCreate = true;
      $scope.modalTitle = 'Nhập hàng';
      $scope.staffname = JSON.parse(sessionStorage.getItem('login')).staffname;
      $scope.book = null;
      $('#large').modal('show');
    } else {
      $scope.invoice_details = [];
      $scope.invoice = {};
      $scope.invoice.discount = 0;
      $scope.invoice.total = 0;
      $scope.publisher_name ="";
      //
      $scope.total_invoice = 0;

      $scope.isCreate = false;
      $scope.modalTitle = 'Chỉnh sửa hóa đơn nhập';
      connect_api('get',baseApi + invoicesController + $scope.id,(response)=>{

        $scope.invoice = response.data;

        console.log($scope.invoice);

        $scope.invoice.publisher_id = String($scope.invoice.publisher_id);
        $scope.invoice_details = $scope.invoice.invoice_details;
        $scope.staffname = $scope.invoice.staff.staffname;
        //set ban dau cho nxb
        index= $scope.publishers.findIndex((obj=>obj.id == $scope.invoice.publisher_id))
        $scope.publisher_name = $scope.publishers[index].publisher_name;

        $scope.total_invoice = 0;
        for(var i = 0 ;i<$scope.invoice_details.length;i++){
          $scope.total_invoice  += $scope.invoice_details[i].total;
        }
        $('#large').modal('show');
      })
    }
    
  };
  // Save data from modal
  $scope.saveData = function () {
    //Insert
    if ($scope.id == 0) {
      $scope.invoice.invoice_details = $scope.invoice_details;
      $scope.invoice.status = 4;
      $scope.invoice.staffID = JSON.parse(sessionStorage.getItem('login')).id;
      var time = new Date();
      $scope.invoice.invoice_date = convertDate(time);
      
      connect_api_data('POST',baseApi+invoicesController,$scope.invoice,(res)=>{
        $scope.invoice.id = res.data.id;
        $scope.data.push($scope.invoice);
        modalE.modal('hide');
      })
    } else {
      //Update
      $scope.invoice.invoice_details = $scope.invoice_details;
      $scope.invoice.status = 4;
      $scope.invoice.staffID = JSON.parse(sessionStorage.getItem('login')).id;
      var time = new Date();
      $scope.invoice.invoice_date = convertDate(time);
      
      connect_api_data('PUT',baseApi+invoicesController+$scope.id,$scope.invoice,(res)=>{
        console.log(res);
        var objIndex = $scope.data.findIndex((obj => obj.id == $scope.id));
        $scope.data[objIndex] = $scope.invoice; 
        modalE.modal('hide');
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
        url: baseApi + invoicesController + id,
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

  $scope.selected_row = function (row){
    if($scope.selected_invoice_details.bookID == row.bookID){
      $scope.selected_invoice_details = {};
      console.log('ngu');
    }
    else{
      $scope.selected_invoice_details = angular.copy(row);
    }
  }

  $scope.book_selected = function (book){
    var objIndex  = $scope.invoice_details.findIndex((obj => obj.bookID == book.id))
    if(objIndex==-1){
      var invoice_detail = {};
      invoice_detail.bookID = book.id;
      invoice_detail.books = book;
      invoice_detail.discount = 0;
      invoice_detail.price = 0;
      invoice_detail.quantity = 0;
      invoice_detail.total = 0; 
      $scope.invoice_details.push(invoice_detail);
      
      
      document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('book_finding').value = ''
      })
      $scope.selected_invoice_details = angular.copy(invoice_detail);
      for(var i = 0 ;i<$scope.invoice_details.length;i++){
          $scope.total_invoice  += $scope.invoice_details[i].total;
        }
      }
    else{
      toastr.info('Đã tồn tại sách này');
      // showAlert(errorStatus);
    }
    // $ = jQuery.noConflict();
    // jQuery( document ).ready(function( $ ) {
    //   $('#book_finding').val('');
    // });
    // $ = jQuery.noConflict(true);
  }

  $scope.publisher_change = function (id){
    $scope.invoice.publisher_id = id; 
    if($scope.publishers !== undefined){
      index= $scope.publishers.findIndex((obj=>obj.id == id))
      var publisher = $scope.publishers[index]
      
      $scope.invoice.publishers = publisher; 
      $scope.publisher_name = publisher.publisher_name
    }
  }

  $scope.update = function (selected_invoice_details){
    console.log(selected_invoice_details);
    if(selected_invoice_details.bookID === undefined){
      toastr.info("Bạn cần chọn 1 sản phẩm!");
    }
    else{
      selected_invoice_details.discount = parseInt(selected_invoice_details.discount)
      selected_invoice_details.price = parseFloat(selected_invoice_details.price)
      selected_invoice_details.quantity = parseInt(selected_invoice_details.quantity)
      selected_invoice_details.total = selected_invoice_details.quantity * selected_invoice_details.price * (100-selected_invoice_details.discount)/100
      var objIndex = $scope.invoice_details.findIndex((obj => obj.bookID == selected_invoice_details.bookID))
      $scope.invoice_details[objIndex] = selected_invoice_details; 
    
      $scope.total_invoice = 0; 
      for(var i = 0 ;i<$scope.invoice_details.length;i++){
        $scope.total_invoice  += $scope.invoice_details[i].total;
      }
      $scope.invoice.total = $scope.total_invoice * (100-$scope.invoice.discount)/100;
    }
    $scope.selected_invoice_details = {};
  }

  $scope.deleteClick_createform = function (row){
    console.log(row);
    var objIndex = $scope.invoice_details.findIndex((obj => obj.bookID == row.bookID))
    $scope.total_invoice = $scope.total_invoice - (row.total);
    $scope.invoice.total = $scope.total_invoice * (100-$scope.invoice.discount)/100;
    $scope.invoice_details.splice(objIndex, 1);
  }

  $scope.invoice_discount_change = function (discount){
    $scope.invoice.total = $scope.total_invoice * (100-discount)/100;
  }
  $('#invoice_details').on('click', 'tr', function () {
    if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
    }
    else {
        $.each($('#invoice_details tr.selected'), function (idx, val) {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
    }
  });

  
}