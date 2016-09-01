module.exports = angular.module('controllers')
  .controller('HomeController', [
      '$scope',
      'ApiService',

      function($scope, ApiService) {
          $scope.greeting = 'Yeallow!';

          ApiService.getIndex()
            .then(function(response) {
              console.log(response.data);
            });
      }
  ]);
