
const ordersController = 'orders/';
const booksController = 'books/';
const publishersController = 'publishers/';
const order_detailsController = 'order_details/';
const order_statusController = 'order_status/';
const nameChild = 'child/';
 
app.controller('ordersController', ordersController2);
function ordersController2($scope, $http) {

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
  $scope.tmp ={};
  if(window.location.pathname=='/admin/orders/now'){
    $scope.tmp.created_at = convertDatetoDay(new Date());
  }
  $scope.currentPage = 1;
  $scope.currentPage2 = 1;
  $scope.item;
  $scope.total_invoice = 0;
  //get all invoices
  connect_api('post',baseApi + ordersController+'get_all',(response)=>{
    $scope.data = response.data;
    $scope.data.forEach((item)=>{
      item.created_at = convertDate(item.created_at)
    })
    console.log($scope.data);
  })

  // connect_api('get',baseApi + 'book/'+'get_basic',(response)=>{
  //   $scope.books = response.data.books;
  // })

  connect_api('get',baseApi + order_statusController,(response)=>{
    $scope.statuses = response.data;
  })
 
  // open modal
  $scope.openModal = function (row) {
    $scope.order = row;
    console.log($scope.order);
    // row.order_status_id = String(row.order_status_id);
    $('#large').modal('show');
  }
     // Save data from modal
  $scope.saveData = function (order) {
    connect_api_data('POST',baseApi+ordersController+'update_status',order,(res)=>{
      var objIndex = $scope.data.findIndex((obj => obj.id == order.id));
      $scope.data[objIndex] = order; 
      var objIndex2 = $scope.statuses.findIndex((obj => obj.id == order.order_status_id));
      $scope.data[objIndex].status= $scope.statuses[objIndex2]
      modalE.modal('hide');
    })
  };

  $scope.generate_pdf=function (order){
    window.open(baseApi+'generate-pdf/'+order.id+'/'+JSON.parse(sessionStorage.getItem('login')).staffname, "_blank").focus();
  }

};