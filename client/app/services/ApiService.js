module.exports = angular.module('services')
  .service('ApiService', ['$http', 'config', function($http, config) {
      var urlBase = config.apiUrl;

      this.getIndex = function() {
        return $http.get(urlBase);
      }

      this.authenticate = function(credentials) {
        return $http({
          method: "POST",
          url: config.getAuthUrl(),
          data: $.param(credentials),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        });
      }

      this.getFilteredUsers = function(filters) {
        return $http({
          method: "GET",
          url: config.getUserListUrl(),
          params: filters
        })
      }

      this.getUsers = function() {
        return $http.get(config.getUserListUrl());
      }

      this.getUser = function(userId) {
        return $http.get(config.getUserDisplayUrl(userId));
      }

      this.removeUser = function(userId) {
        return $http({
          method: "DELETE",
          url: config.getRemoveUserUrl(userId)
        });
      }

      this.getDuties = function() {
        return $http.get(config.getDutyListUrl());
      }

      this.createUser = function(user) {
        return $http({
          method: "POST",
          url: config.getCreateUserUrl(),
          data: $.param(user),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        });
      }

      this.updateUser = function(user) {
        return $http({
          method: "PUT",
          url: config.getUpdateUserUrl(user.id),
          data: $.param(user),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        });
      }
  }]);
