module.exports = angular.module('services')
  .service('ApiService', ['$http', 'config', function($http, config) {
      var urlBase = config.apiUrl;

      this.getIndex = function() {
        return $http.get(urlBase);
      }

  }]);
