module.exports = angular.module('controllers')
  .controller('UserListController', ['$scope', 'ApiService', function($scope, ApiService) {
    $scope.status = {
      loaded: false,
      dutiesLoaded: false,
      usersLoaded: false
    }

    $scope.users = [];
    $scope.supervisors = [];
    $scope.duties = [];

    $scope.filters = {
      firstName: '',
      lastName: '',
      supervisor: '',
      duties: []
    };

    $scope.clearSupervisor = function($event) {
      $event.stopPropagation();
      $scope.filters.supervisor = '';
      $scope.updateUserList();

    }

    $scope.updateThrottle = null;

    $scope.updateUserList = function() {

      var realFilters = {
        firstName: $scope.filters.firstName,
        lastName: $scope.filters.lastName,
        supervisor: '',
        duties: ''
      };

      realFilters.supervisor = $scope.filters.supervisor.id;
      var duties = [];
      for(var i in $scope.filters.duties) {
        duties.push($scope.filters.duties[i].id);
      }

      realFilters.duties = duties.join(',');

      clearTimeout($scope.updateThrottle);
      $scope.updateThrottle = setTimeout(function() {
        ApiService.getFilteredUsers(realFilters).then(function(response) {
          $scope.users = response.data;
        });
      }, 400);

    }

    ApiService.getUsers().then(function(response) {
      $scope.users = response.data;
      $scope.supervisors = response.data;
      $scope.status.usersLoaded = true;
      $scope.status.loaded = $scope.checkLoadStatus();
    });

    ApiService.getDuties().then(function(response) {
      $scope.duties = response.data;
      $scope.status.dutiesLoaded = true;
      $scope.status.loaded = $scope.checkLoadStatus();
    });

    $scope.checkLoadStatus = function() {
      return $scope.status.dutiesLoaded && $scope.status.usersLoaded;
    }
  }]);
