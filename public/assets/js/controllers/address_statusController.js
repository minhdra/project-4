const app = angular.module('app', []);
app.controller('address_statusController', address_statusController);
function address_statusController($scope) {
  $scope.hello = 'Hello bros';
}