
const ordersController = 'orders/';
const nameChild = 'child/';
 
app.controller('homeController', homeController);
function homeController($scope, $http) {

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
   
   connect_api('post',baseApi+ordersController+'getTopProductSell',(res)=>{
     $scope.count_quantity = res.data[1];
     var data  = [];
     for(var item in res.data[0]){
       data.push([res.data[0][item],res.data[0][item][0].book.sum_quantity]);
     }

     data = data.sort(function(a, b){return -a[1] + b[1]});
     var result = [];
     for(var i =0;i<data.length;i++){
        if(i==8){break;}
        else{
          element = data[i];
          var total_price = 0;
          for(var j=0;j<element[0].length;j++){
            total_price+=element[0][j].quantity * element[0][j].single_price;
            element[0][j].total_price = total_price;
          }
          result.push(element[0][0]);
        }
     }
     $scope.top_books = result;
   })

   connect_api('post',baseApi+ordersController+'getStatusAnalysis',(res)=>{
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Chờ xác nhận', 'Đã xác nhận', 'Đang lấy hàng', 'Đã lấy hàng', 'Đã thanh toán', 'Đã hủy'],
            datasets: [{
                label: '# of Votes',
                data: res.data,
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    'rgba(75, 192, 192)',
                    'rgba(153, 102, 255)',
                    'rgba(255, 159, 64)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom',
            }
          }
        }
    });
   })

   connect_api('post',baseApi+ordersController+'getSellYear',(res)=>{
      var data  = [];
      for(var item in res.data){
        data.push([item,res.data[item]]);
      }
      // console.log(data);
      var result1 = [];
      var result2 = [];

      var first_item = data[0][0][1];
      console.log(first_item);
      for(var i = 1 ; i<parseInt(first_item);i++){
        result1.push('Tháng '+i);
        result2.push(0);
      }

      for(var i=0;i<data.length;i++){
        element = data[i];
        sum_price_month = 0;
        for(var j = 0 ; j<element[1].length;j++){
          sum_price_month+=element[1][j].total;
        }
        result1.push('Tháng '+element[0])
        result2.push(sum_price_month)
        last_item = element[0];
      }
       
      const ctx = document.getElementById('myChart2').getContext('2d');
      const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: result1,
              datasets: [{
                  label: 'Doanh thu (VNĐ)',
                  data: result2,
                  backgroundColor: 'rgba(75, 192, 192)',
                  borderColor:'rgba(75, 192, 192, 1)',
                  borderWidth: 1
              }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: 'bottom',
              }
            }
          }
      });
   })

   connect_api('post',baseApi+ordersController+'getOrderToday',(res)=>{
     $scope.orderToday = res.data;
   })
   connect_api('post',baseApi+ordersController+'getSumPriceMonth',(res)=>{
     $scope.sumPrice = res.data;
   })
   connect_api('post',baseApi+ordersController+'getQuantityCustomers',(res)=>{
     $scope.quantityCustomer = res.data;
   })
};