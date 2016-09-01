module.exports = angular.module('controllers')
  .controller('TestController', ['$scope', 'config', function($scope, config) {
      $scope.greeting = 'Yeallow2!';
      console.log(config.apiUrl)
  }]);
