const app = angular.module('app', []);
app.controller('TestController', TestController);
function TestController($scope) {
  $scope.hello = 'Hello bros';
}