const baseApi = 'http://localhost:8000/api/';
const nameController = 'test/';
const nameChild = 'child/';

const app = angular.module('app', []);
app.controller('TestController', TestController);
function TestController($scope, $http) {
  $scope.hello = 'Hello bros';
}