
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
        console.log(res);
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
};