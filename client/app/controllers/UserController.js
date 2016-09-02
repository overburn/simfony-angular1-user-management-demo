module.exports = angular.module('controllers')
  .controller('UserController', ['$scope', '$localStorage', '$state', '$http', 'config', 'ApiService' , function($scope, $localStorage, $state, $http, config, ApiService) {

    $scope.status = {
      removingUser: false
    }

    $scope.logout = function() {
      if(!confirm("Are you sure you want to logout")) {
        return false;
      }
      $localStorage.currentUser = {};
      $http.defaults.headers.common.Authorization = "";
      $state.go('login');
    }

    $scope.removeUser = function(id) {
      if(confirm("Are you sure you want do remove this user?")) {
        $scope.status.removingUser = true;
        ApiService.removeUser(id).then(function(response) {
          $scope.user = response.data;
          $scope.status.removingUser = false;
          $state.go('users.list');
        });
      }
    }

    $scope.photoPath = config.apiBaseUrl+"/uploads/photos/";

  }]);
