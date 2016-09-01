webpackJsonp([0],[
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(1);
	__webpack_require__(8);

	__webpack_require__(9);
	__webpack_require__(11);

	angular.module('app', ['ui.router', 'controllers', 'services']).constant('config', __webpack_require__(14)).config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {
	  $urlRouterProvider.otherwise('/');

	  $stateProvider.state('home', {
	    url: '/',
	    template: __webpack_require__(15),
	    controller: 'HomeController'
	  }).state('test', {
	    url: '/test',
	    template: __webpack_require__(16),
	    controller: 'TestController'
	  });
	}]);

/***/ },
/* 1 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 9 */
/***/ function(module, exports, __webpack_require__) {

	module.exports = angular.module('services', []);

	__webpack_require__(10);

/***/ },
/* 10 */
/***/ function(module, exports) {

	module.exports = angular.module('services').service('ApiService', ['$http', 'config', function ($http, config) {
	  var urlBase = config.apiUrl;

	  this.getIndex = function () {
	    return $http.get(urlBase);
	  };
	}]);

/***/ },
/* 11 */
/***/ function(module, exports, __webpack_require__) {

	angular.module('controllers', []);

	__webpack_require__(12);
	__webpack_require__(13);

/***/ },
/* 12 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('HomeController', ['$scope', 'ApiService', function ($scope, ApiService) {
	  $scope.greeting = 'Yeallow!';

	  ApiService.getIndex().then(function (response) {
	    console.log(response.data);
	  });
	}]);

/***/ },
/* 13 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('TestController', ['$scope', 'config', function ($scope, config) {
	    $scope.greeting = 'Yeallow2!';
	    console.log(config.apiUrl);
	}]);

/***/ },
/* 14 */
/***/ function(module, exports) {

	module.exports = {
	  apiUrl: 'http://demo.local.ro:180'
	};

/***/ },
/* 15 */
/***/ function(module, exports) {

	module.exports = "{{greeting}}\r\n\r\n<a ui-sref=\"test()\">Greetings friend!</a>\r\n"

/***/ },
/* 16 */
/***/ function(module, exports) {

	module.exports = "{{greeting}}\r\n\r\nGreetings friend2!\r\n"

/***/ }
]);