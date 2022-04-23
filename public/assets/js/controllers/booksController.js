const baseApi = 'http://localhost:8000/api/';
const nameController = 'books/';
const nameChild = 'child/';

 
app.controller('booksController', booksController);
function booksController($scope, $http) {
  $http({
    method: 'GET',
    url: baseApi + nameController
  }).then(function (response) {
    $scope.data = response.data;
    console.log(response.data);
  }, error => console.log(error))
}