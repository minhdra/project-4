const baseApi = 'http://localhost:8000/api/';
const nameController = 'test/';
const nameChild = 'child/';

 
app.controller('address_statusController', address_statusController);
function address_statusController($scope, $http) {
  $scope.hello = 'Hello bros';
}