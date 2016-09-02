module.exports = angular.module('controllers')
  .controller('UserDisplayController', ['$scope', 'ApiService', '$stateParams',  function($scope, ApiService, $stateParams) {
    $scope.status = {
      loaded: false
    }

    $scope.user = {};

    ApiService.getUser($stateParams.userId).then(function(response) {
      $scope.user = response.data;
      $scope.status.loaded = true;
    });
  }]);
