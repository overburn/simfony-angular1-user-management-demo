module.exports = angular.module('controllers')
  .controller('LoginController', ['$scope', '$state', '$localStorage', '$http', 'config', 'ApiService',
    function($scope, $state, $localStorage, $http, config, ApiService) {
    $scope.credentials = {
      email: '',
      password: ''
    };

    $scope.status = {
      error: false,
      success: false,
      loading: false
    };

    $scope.submitForm = function() {
      $scope.status.loading = true;
      $scope.status.error = false;
      $scope.status.success = false;


      ApiService.authenticate($scope.credentials).then(function(response) {
        if(response.data.token) {
          $scope.status.loading = false;
          $scope.status.success = true;

          $localStorage.currentUser = {
            data: response.data.user,
            token: response.data.token
          };

          $state.go('users.list');
        } else {
          $scope.status.error = true;
        }

        $scope.status.loading = false;
      }).catch(function(response) {
        $scope.status.loading = false;
        $scope.status.error = true;
      });
    }
  }]);
