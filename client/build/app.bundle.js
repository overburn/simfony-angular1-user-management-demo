webpackJsonp([0],[
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(1);
	__webpack_require__(8);
	__webpack_require__(9);
	__webpack_require__(15);

	__webpack_require__(16);

	__webpack_require__(18);
	__webpack_require__(21);

	angular.module('app', ['ui.router', 'ui.select', 'ngStorage', 'angularFileUpload', 'datatables', 'controllers', 'services']).constant('config', __webpack_require__(28)).run(['$rootScope', '$localStorage', '$state', '$http', function ($rootScope, $localStorage, $state, $http) {
	  $rootScope.$on('$stateChangeStart', function (event, toState, toParams, fromState, fromParams) {

	    if (toState.isAuthenticated == true) {
	      var token = $localStorage.currentUser.token;

	      if (!token) {
	        $state.go('login');
	        event.preventDefault();
	      }

	      $http.defaults.headers.common.Authorization = 'Bearer ' + token;
	    }
	  });
	}]).config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

	  $urlRouterProvider.otherwise('/');

	  $stateProvider.state('login', {
	    url: '/login',
	    template: __webpack_require__(29),
	    controller: 'LoginController'
	  }).state('users', {
	    template: __webpack_require__(30),
	    controller: 'UserController'
	  }).state('users.list', {
	    url: '/',
	    isAuthenticated: true,
	    template: __webpack_require__(31),
	    controller: 'UserListController'
	  }).state('users.create', {
	    url: '/users/create',
	    isAuthenticated: true,
	    template: __webpack_require__(32),
	    controller: 'UserCreateController'
	  }).state('users.display', {
	    url: '/users/{userId}',
	    isAuthenticated: true,
	    template: __webpack_require__(33),
	    controller: 'UserDisplayController'
	  }).state('users.edit', {
	    url: '/users/{userId}/edit',
	    isAuthenticated: true,
	    template: __webpack_require__(34),
	    controller: 'UserEditController'
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
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 16 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 17 */,
/* 18 */
/***/ function(module, exports, __webpack_require__) {

	module.exports = angular.module('services', []);

	__webpack_require__(19);

/***/ },
/* 19 */
/***/ function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function($) {module.exports = angular.module('services').service('ApiService', ['$http', 'config', function ($http, config) {
	  var urlBase = config.apiUrl;

	  this.getIndex = function () {
	    return $http.get(urlBase);
	  };

	  this.authenticate = function (credentials) {
	    return $http({
	      method: "POST",
	      url: config.getAuthUrl(),
	      data: $.param(credentials),
	      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	    });
	  };

	  this.getFilteredUsers = function (filters) {
	    return $http({
	      method: "GET",
	      url: config.getUserListUrl(),
	      params: filters
	    });
	  };

	  this.getUsers = function () {
	    return $http.get(config.getUserListUrl());
	  };

	  this.getUser = function (userId) {
	    return $http.get(config.getUserDisplayUrl(userId));
	  };

	  this.removeUser = function (userId) {
	    return $http({
	      method: "DELETE",
	      url: config.getRemoveUserUrl(userId)
	    });
	  };

	  this.getDuties = function () {
	    return $http.get(config.getDutyListUrl());
	  };

	  this.createUser = function (user) {
	    return $http({
	      method: "POST",
	      url: config.getCreateUserUrl(),
	      data: $.param(user),
	      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	    });
	  };

	  this.updateUser = function (user) {
	    return $http({
	      method: "PUT",
	      url: config.getUpdateUserUrl(user.id),
	      data: $.param(user),
	      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	    });
	  };
	}]);
	/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(20)))

/***/ },
/* 20 */,
/* 21 */
/***/ function(module, exports, __webpack_require__) {

	angular.module('controllers', []);

	__webpack_require__(22);

	__webpack_require__(23);
	__webpack_require__(24);
	__webpack_require__(25);
	__webpack_require__(26);
	__webpack_require__(27);

/***/ },
/* 22 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('LoginController', ['$scope', '$state', '$localStorage', '$http', 'config', 'ApiService', function ($scope, $state, $localStorage, $http, config, ApiService) {
	  $scope.credentials = {
	    email: '',
	    password: ''
	  };

	  $scope.status = {
	    error: false,
	    success: false,
	    loading: false
	  };

	  $scope.submitForm = function () {
	    $scope.status.loading = true;
	    $scope.status.error = false;
	    $scope.status.success = false;

	    ApiService.authenticate($scope.credentials).then(function (response) {
	      if (response.data.token) {
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
	    }).catch(function (response) {
	      $scope.status.loading = false;
	      $scope.status.error = true;
	    });
	  };
	}]);

/***/ },
/* 23 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('UserController', ['$scope', '$localStorage', '$state', '$http', 'config', 'ApiService', function ($scope, $localStorage, $state, $http, config, ApiService) {

	  $scope.status = {
	    removingUser: false
	  };

	  $scope.logout = function () {
	    if (!confirm("Are you sure you want to logout")) {
	      return false;
	    }
	    $localStorage.currentUser = {};
	    $http.defaults.headers.common.Authorization = "";
	    $state.go('login');
	  };

	  $scope.removeUser = function (id) {
	    if (confirm("Are you sure you want do remove this user?")) {
	      $scope.status.removingUser = true;
	      ApiService.removeUser(id).then(function (response) {
	        $scope.user = response.data;
	        $scope.status.removingUser = false;
	        $state.go('users.list');
	      });
	    }
	  };

	  $scope.photoPath = config.apiBaseUrl + "/uploads/photos/";
	}]);

/***/ },
/* 24 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('UserCreateController', ['$scope', '$state', '$localStorage', 'FileUploader', 'config', 'ApiService', function ($scope, $state, $localStorage, FileUploader, config, ApiService) {
	  $scope.supervisors = [];
	  $scope.duties = [];

	  $scope.status = {
	    supervisorsLoaded: false,
	    dutiesLoaded: false,
	    formNotReady: true,
	    checkIfFormReady: function () {
	      this.formNotReady = !(this.supervisorsLoaded && this.dutiesLoaded);
	    },
	    error: false,
	    success: false,
	    loading: false,
	    errors: []
	  };

	  ApiService.getUsers().then(function (response) {
	    $scope.supervisors = response.data;
	    $scope.status.supervisorsLoaded = true;
	    $scope.status.checkIfFormReady();
	  });

	  ApiService.getDuties().then(function (response) {
	    $scope.duties = response.data;
	    $scope.status.dutiesLoaded = true;
	    $scope.status.checkIfFormReady();
	  });

	  $scope.triggerUpload = function () {
	    angular.element('#hidden-file-upload').trigger('click');
	  };

	  $scope.user = {
	    email: '',
	    password: '',
	    firstName: '',
	    lastName: '',
	    gender: '',
	    photo: 'placeholder_avatar.png',
	    supervisor: 0,
	    duties: []
	  };

	  $scope.uploader = new FileUploader({
	    headers: { "Authorization": "Bearer " + $localStorage.currentUser.token },
	    url: config.getPhotoUploadUrl(),
	    autoUpload: true,
	    onSuccessItem: function (id, response, status, headers) {
	      $scope.user.photo = response;
	    }
	  });

	  $scope.submitForm = function () {
	    $scope.status.error = false;
	    $scope.status.loading = true;

	    ApiService.createUser($scope.user).then(function (response) {
	      $scope.status.loading = false;
	      $scope.status.success = true;
	      console.log(response.data);
	      $state.go('users.display', { userId: response.data.id });
	    }).catch(function (response) {
	      $scope.status.error = true;
	      $scope.status.loading = false;
	      $scope.status.success = false;
	      $scope.status.errors = [];

	      if (response.data.form.children) {
	        var responseErrors = response.data.form.children;

	        for (var i in responseErrors) {
	          if (responseErrors[i].errors) {
	            $scope.status.errors.push({ field: i, message: responseErrors[i].errors[0] });
	          }
	        }
	      }
	    });
	  };
	}]);

/***/ },
/* 25 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('UserDisplayController', ['$scope', 'ApiService', '$stateParams', function ($scope, ApiService, $stateParams) {
	  $scope.status = {
	    loaded: false
	  };

	  $scope.user = {};

	  ApiService.getUser($stateParams.userId).then(function (response) {
	    $scope.user = response.data;
	    $scope.status.loaded = true;
	  });
	}]);

/***/ },
/* 26 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('UserEditController', ['$scope', '$state', '$localStorage', '$stateParams', 'FileUploader', 'config', 'ApiService', function ($scope, $state, $localStorage, $stateParams, FileUploader, config, ApiService) {
	  $scope.supervisors = [];
	  $scope.duties = [];

	  $scope.status = {
	    supervisorsLoaded: false,
	    dutiesLoaded: false,
	    formNotReady: true,
	    checkIfFormReady: function () {
	      this.formNotReady = !(this.supervisorsLoaded && this.dutiesLoaded);
	    },
	    error: false,
	    success: false,
	    loading: false,
	    loaded: false,
	    errors: []
	  };

	  ApiService.getUser($stateParams.userId).then(function (response) {

	    //TODO: fix the naming issues at the source if there's time
	    var tmp = response.data;
	    tmp.firstName = tmp.first_name;
	    tmp.lastName = tmp.last_name;
	    delete tmp.first_name;
	    delete tmp.last_name;

	    $scope.user = tmp;
	    $scope.status.loaded = true;
	  });

	  ApiService.getUsers().then(function (response) {
	    $scope.supervisors = response.data;
	    $scope.status.supervisorsLoaded = true;
	    $scope.status.checkIfFormReady();
	  });

	  ApiService.getDuties().then(function (response) {
	    $scope.duties = response.data;
	    $scope.status.dutiesLoaded = true;
	    $scope.status.checkIfFormReady();
	  });

	  $scope.triggerUpload = function () {
	    angular.element('#hidden-file-upload').trigger('click');
	  };

	  $scope.user = {
	    email: '',
	    password: '',
	    firstName: '',
	    lastName: '',
	    gender: '',
	    photo: 'placeholder_avatar.png',
	    supervisor: 0,
	    duties: []
	  };

	  $scope.uploader = new FileUploader({
	    headers: { "Authorization": "Bearer " + $localStorage.currentUser.token },
	    url: config.getPhotoUploadUrl(),
	    autoUpload: true,
	    onSuccessItem: function (id, response, status, headers) {
	      $scope.user.photo = response;
	    }
	  });

	  $scope.submitForm = function () {
	    $scope.status.error = false;
	    $scope.status.loading = true;

	    ApiService.updateUser($scope.user).then(function (response) {
	      $scope.status.loading = false;
	      $scope.status.success = true;

	      //$state.go('users.display', {userId: response.data.id});
	    }).catch(function (response) {
	      $scope.status.error = true;
	      $scope.status.loading = false;
	      $scope.status.success = false;
	      $scope.status.errors = [];

	      if (response.data.form.children) {
	        var responseErrors = response.data.form.children;

	        for (var i in responseErrors) {
	          if (responseErrors[i].errors) {
	            $scope.status.errors.push({ field: i, message: responseErrors[i].errors[0] });
	          }
	        }
	      }
	    });
	  };
	}]);

/***/ },
/* 27 */
/***/ function(module, exports) {

	module.exports = angular.module('controllers').controller('UserListController', ['$scope', 'ApiService', function ($scope, ApiService) {
	  $scope.status = {
	    loaded: false,
	    dutiesLoaded: false,
	    usersLoaded: false
	  };

	  $scope.users = [];
	  $scope.supervisors = [];
	  $scope.duties = [];

	  $scope.filters = {
	    firstName: '',
	    lastName: '',
	    supervisor: '',
	    duties: []
	  };

	  $scope.clearSupervisor = function ($event) {
	    $event.stopPropagation();
	    $scope.filters.supervisor = '';
	    $scope.updateUserList();
	  };

	  $scope.updateThrottle = null;

	  $scope.updateUserList = function () {

	    var realFilters = {
	      firstName: $scope.filters.firstName,
	      lastName: $scope.filters.lastName,
	      supervisor: '',
	      duties: ''
	    };

	    realFilters.supervisor = $scope.filters.supervisor.id;
	    var duties = [];
	    for (var i in $scope.filters.duties) {
	      duties.push($scope.filters.duties[i].id);
	    }

	    realFilters.duties = duties.join(',');

	    clearTimeout($scope.updateThrottle);
	    $scope.updateThrottle = setTimeout(function () {
	      ApiService.getFilteredUsers(realFilters).then(function (response) {
	        $scope.users = response.data;
	      });
	    }, 400);
	  };

	  ApiService.getUsers().then(function (response) {
	    $scope.users = response.data;
	    $scope.supervisors = response.data;
	    $scope.status.usersLoaded = true;
	    $scope.status.loaded = $scope.checkLoadStatus();
	  });

	  ApiService.getDuties().then(function (response) {
	    $scope.duties = response.data;
	    $scope.status.dutiesLoaded = true;
	    $scope.status.loaded = $scope.checkLoadStatus();
	  });

	  $scope.checkLoadStatus = function () {
	    return $scope.status.dutiesLoaded && $scope.status.usersLoaded;
	  };
	}]);

/***/ },
/* 28 */
/***/ function(module, exports) {

	module.exports = {
	  apiBaseUrl: 'http://demo.local.ro:180/',
	  apiUrl: this.apiBaseUrl + 'app_dev.php',

	  getApiUrl: function () {
	    return this.apiBaseUrl + 'app_dev.php';
	  },

	  methods: {
	    photoUpload: '/users/upload-photo',
	    authenticate: '/authenticate',
	    userList: '/users',
	    userCreate: '/users',
	    userUpdate: '/users',
	    userDisplay: '/users',
	    userRemove: '/users',
	    dutyList: '/duties'
	  },

	  getAuthUrl: function () {
	    return this.getApiUrl() + this.methods.authenticate;
	  },

	  getCreateUserUrl: function () {
	    return this.getApiUrl() + this.methods.userCreate;
	  },

	  getUpdateUserUrl: function (userId) {
	    return this.getApiUrl() + this.methods.userUpdate + "/" + userId;
	  },

	  getPhotoUploadUrl: function () {
	    return this.getApiUrl() + this.methods.photoUpload;
	  },

	  getUserListUrl: function () {
	    return this.getApiUrl() + this.methods.userList;
	  },

	  getUserDisplayUrl: function (userId) {
	    return this.getApiUrl() + this.methods.userDisplay + "/" + userId;
	  },

	  getRemoveUserUrl: function (userId) {
	    return this.getApiUrl() + this.methods.userRemove + "/" + userId;
	  },

	  getDutyListUrl: function () {
	    return this.getApiUrl() + this.methods.dutyList;
	  }
	};

/***/ },
/* 29 */
/***/ function(module, exports) {

	module.exports = "<nav class=\"navbar navbar-default\">\n  <div class=\"container-fluid\">\n    <div class=\"navbar-header\">\n      <a class=\"navbar-brand\" href=\"#\">DemoApp</a>\n    </div>\n  </div>\n</nav>\n\n<div class=\"col-md-6 col-md-offset-3\">\n  <div class=\"panel panel-default\">\n    <div class=\"panel-heading\">Login</div>\n    <div class=\"panel-body\">\n      <form ng-submit=\"submitForm()\">\n        <div class=\"alert alert-success ng-hide\" ng-show=\"status.success\">\n          <span class=\"loading-spinner\"></span> You have been successfully authenticated ...\n        </div>\n        <div class=\"alert alert-info ng-hide\" ng-show=\"status.loading\">\n          <span class=\"loading-spinner\"></span>\n          <span>Please wait ...</span>\n        </div>\n        <div class=\"alert alert-danger ng-hide\" ng-show=\"status.error\">Invalid credentials! Please try again.</div>\n        <div class=\"form-group\">\n          <label for=\"input-email\">Email</label>\n          <input type=\"email\" class=\"form-control\" id=\"input-email\" placeholder=\"Your email here\" ng-model=\"credentials.email\"/>\n        </div>\n        <div class=\"form-group\">\n          <label for=\"input-password\">Password</label>\n          <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Your password here\" ng-model=\"credentials.password\"/>\n        </div>\n\n        <button type=\"submit\" class=\"btn btn-default\" ng-click=\"Submit\">Login</button>\n      </form>\n    </div>\n  </div>\n</div>\n"

/***/ },
/* 30 */
/***/ function(module, exports) {

	module.exports = "<nav class=\"navbar navbar-default\">\r\n  <div class=\"container-fluid\">\r\n    <div class=\"navbar-header\">\r\n      <a class=\"navbar-brand\" href=\"#\">DemoApp Authenticated</a>\r\n    </div>\r\n\r\n    <div class=\"pull-right\">\r\n      <button ng-click=\"logout()\" class=\"btn btn-warning btn-logout\">Logout</button>\r\n    </div>\r\n  </div>\r\n</nav>\r\n\r\n<div class=\"alert alert-warning ng-hide\" ng-show=\"status.removingUser == true\">\r\n  <span class=\"loading-spinner\"></span>\r\n  Deleting user...\r\n</div>\r\n\r\n<div ui-view></div>\r\n"

/***/ },
/* 31 */
/***/ function(module, exports) {

	module.exports = "<div class=\"panel\">\r\n  <button class=\"btn btn-default\" ui-sref=\"users.create\">Create User</button>\r\n</div>\r\n\r\n<div class=\"alert alert-info ng-hide\" ng-show=\"status.loaded == false\">\r\n  <span class=\"loading-spinner\"></span>\r\n  Loading users ...\r\n</div>\r\n\r\n<div class=\"ng-hide\" ng-show=\"status.loaded == true\">\r\n  <div class=\"col-md-4\">\r\n    <div class=\"panel panel-default \">\r\n      <div class=\"panel-heading\">\r\n        Filters\r\n      </div>\r\n\r\n      <div class=\"panel-body\">\r\n        <form>\r\n          <div class=\"form-group\">\r\n            <label for=\"input-filter-name\">First Name</label>\r\n            <input type=\"text\" class=\"form-control\" id=\"input-filter-name\" placeholder=\"Filter by first name\" ng-model=\"filters.firstName\" ng-change=\"updateUserList()\"/>\r\n          </div>\r\n          <div class=\"form-group\">\r\n            <label for=\"input-filter-name\">Last Name</label>\r\n            <input type=\"text\" class=\"form-control\" id=\"input-filter-name\" placeholder=\"Filter by last name\" ng-model=\"filters.lastName\" ng-change=\"updateUserList()\"/>\r\n          </div>\r\n          <div class=\"form-group\">\r\n            <label for=\"input-filter-supervisor\">Supervisor</label>\r\n            <ui-select\r\n              ng-model=\"filters.supervisor\"\r\n              theme=\"bootstrap\"\r\n              title=\"Filter supervisor\"\r\n              ng-change=\"updateUserList()\">\r\n              <ui-select-match placeholder=\"\">\r\n                {{$select.selected.first_name}} {{$select.selected.last_name}}\r\n                <button class=\"btn btn-xs btn-danger btn-clear-supervisor\" ng-click=\"clearSupervisor($event)\">X</button>\r\n              </ui-select-match>\r\n              <ui-select-choices repeat=\"supervisor in supervisors | filter: $select.search\">\r\n                <span>{{supervisor.first_name}} {{supervisor.last_name}}</span>\r\n              </ui-select-choices>\r\n            </ui-select>\r\n          </div>\r\n\r\n          <div class=\"form-group\">\r\n            <label for=\"input-filter-duties\">Duties</label>\r\n            <ui-select\r\n              multiple\r\n              ng-model=\"filters.duties\"\r\n              theme=\"bootstrap\"\r\n              title=\"Choose duties\"\r\n              ng-change=\"updateUserList()\">\r\n              <ui-select-match placeholder=\"Filter by duties\">{{$item.name}}</ui-select-match>\r\n              <ui-select-choices repeat=\"duty in duties | filter: $select.search\">\r\n                <span>{{duty.name}}</span>\r\n              </ui-select-choices>\r\n            </ui-select>\r\n          </div>\r\n        </form>\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"col-md-8\">\r\n    <table class=\"table user-list-table\">\r\n        <thead>\r\n          <tr>\r\n              <th>ID</th>\r\n              <th>Photo</th>\r\n              <th>Name</th>\r\n              <th>Email</th>\r\n              <th>Gender</th>\r\n              <th>Supervisor</th>\r\n              <th>Duties</th>\r\n              <th>Actions</th>\r\n          </tr>\r\n        </thead>\r\n        <tbody>\r\n          <tr ng-repeat=\"user in users\">\r\n              <td>{{user.id}}</td>\r\n              <td width=\"100\">\r\n                  <img src=\"{{photoPath}}{{user.photo}}\" class=\"profile-photo-thumbnail\"/>\r\n              </td>\r\n              <td >{{user.first_name}} {{user.last_name}}</td>\r\n              <td>{{user.email}}</td>\r\n              <td><span class=\"badge\">{{user.gender}}</span></td>\r\n              <td width=\"150\">\r\n                <span ng-if=\"user.supervisor\">\r\n                  {{user.supervisor.first_name}} {{user.supervisor.last_name}}\r\n                </span>\r\n              </td>\r\n              <td width=\"150\">\r\n                <span ng-repeat=\"duty in user.duties\">\r\n                  {{duty.name}};\r\n                </span>\r\n              </td>\r\n              <td>\r\n                <button class=\"btn btn-xs\" ui-sref=\"users.display({userId:user.id})\">Go To User</button>\r\n              </td>\r\n          </tr>\r\n        </tbody>\r\n    </table>\r\n  </div>\r\n</div>\r\n"

/***/ },
/* 32 */
/***/ function(module, exports) {

	module.exports = "<ol class=\"breadcrumb\">\r\n  <li>\r\n    <a ui-sref=\"users.list()\">\r\n      Users\r\n    </a>\r\n    <li class=\"active\">New User</li>\r\n  </li>\r\n</ol>\r\n\r\n<div class=\"page-heading\">\r\n  <h1>Create new user</h1>\r\n</div>\r\n\r\n<form ng-submit=\"submitForm()\">\r\n  <div class=\"alert alert-danger ng-hide\" ng-show=\"status.error\">\r\n    <span>There were errors in your submission</span>\r\n    <ul>\r\n      <li ng-repeat=\"error in status.errors\">\r\n        {{error.message}} ({{error.field}})\r\n      </li>\r\n    </ul>\r\n  </div>\r\n\r\n  <div class=\"alert alert-info\" ng-show=\"status.loading\">\r\n    <span class=\"loading-spinner\"></span>\r\n    <span>Creating user ...</span>\r\n  </div>\r\n\r\n  <div class=\"alert alert-success\" ng-show=\"status.success\">\r\n    <span class=\"loading-spinner\"></span>\r\n    <span>The user has been created</span>\r\n  </div>\r\n\r\n  <div class=\"row\">\r\n\r\n    <div class=\"col-md-8\">\r\n      <div class=\"form-group\">\r\n        <label for=\"input-email\">Email Address</label>\r\n        <input type=\"email\" class=\"form-control\" id=\"input-email\" placeholder=\"Email\" ng-model=\"user.email\"/>\r\n      </div>\r\n\r\n      <div class=\"form-group\">\r\n        <label for=\"input-password\">Password</label>\r\n        <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Password\" ng-model=\"user.password\"/>\r\n      </div>\r\n\r\n      <div class=\"row\">\r\n        <div class=\"form-group col-md-6\">\r\n          <label for=\"input-first-name\">First Name</label>\r\n          <input type=\"text\" class=\"form-control\" id=\"input-first-name\" placeholder=\"First Name\" ng-model=\"user.firstName\"/>\r\n        </div>\r\n\r\n        <div class=\"form-group col-md-6\">\r\n          <label for=\"input-last-name\">Last Name</label>\r\n          <input type=\"text\" class=\"form-control\" id=\"input-last-name\" placeholder=\"Last Name\" ng-model=\"user.lastName\"/>\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"form-group\">\r\n        <label for=\"input-gender\">Gender</label>\r\n        <div class=\"radio\">\r\n          <label>\r\n            <input type=\"radio\" name=\"input-gender\" id=\"input-gender-male\" value=\"m\" ng-model=\"user.gender\"/>\r\n            Male\r\n          </label>\r\n        </div>\r\n        <div class=\"radio\">\r\n          <label>\r\n            <input type=\"radio\" name=\"input-gender\" id=\"input-gender-female\" value=\"f\" ng-model=\"user.gender\"/>\r\n            Female\r\n          </label>\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"alert alert-warning ng-hide\" ng-show=\"!status.supervisorsLoaded\">\r\n        <span class=\"loading-spinner\"></span> Supervisors loading ...\r\n      </div>\r\n      <div class=\"form-group ng-hide\" ng-show=\"status.supervisorsLoaded\">\r\n        <label for=\"input-supervisor\">Supervisor</label>\r\n        <ui-select\r\n          ng-model=\"user.supervisor\"\r\n          theme=\"bootstrap\"\r\n          title=\"Choose a supervisor\">\r\n          <ui-select-match placeholder=\"Try a name\">{{$select.selected.first_name}} {{$select.selected.last_name}}</ui-select-match>\r\n          <ui-select-choices repeat=\"supervisor in supervisors | filter: $select.search\">\r\n            <span>{{supervisor.first_name}} {{supervisor.last_name}}</span>\r\n          </ui-select-choices>\r\n        </ui-select>\r\n      </div>\r\n\r\n      <div class=\"alert alert-warning ng-hide\" ng-show=\"!status.dutiesLoaded\">\r\n        <span class=\"loading-spinner\"></span> Duties loading ...\r\n      </div>\r\n      <div class=\"form-group ng-hide\" ng-show=\"status.dutiesLoaded\">\r\n        <label for=\"input-duties\">Duties</label>\r\n        <ui-select\r\n          multiple\r\n          ng-model=\"user.duties\"\r\n          theme=\"bootstrap\"\r\n          title=\"Choose duties\">\r\n          <ui-select-match placeholder=\"\">{{$item.name}}</ui-select-match>\r\n          <ui-select-choices repeat=\"duty in duties | filter: $select.search\">\r\n            <span>{{duty.name}}</span>\r\n          </ui-select-choices>\r\n        </ui-select>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"col-md-4\">\r\n      <div class=\"profile-photo\">\r\n        <img src=\"{{photoPath}}{{user.photo}}\"/>\r\n      </div>\r\n\r\n      <button type=\"button\" class=\"btn btn-default btn-upload-photo\" ng-click=\"triggerUpload()\">Upload Profile Photo</button>\r\n      <input type=\"file\" id=\"hidden-file-upload\" nv-file-select uploader=\"uploader\" class=\"ng-hide\"/>\r\n    </div>\r\n</div>\r\n  </div>\r\n  <button type=\"submit\" class=\"btn btn-success\" ng-click=\"Submit\" ng-disabled=\"status.formNotReady\">Create</button>\r\n</form>\r\n"

/***/ },
/* 33 */
/***/ function(module, exports) {

	module.exports = "<ol class=\"breadcrumb\">\r\n  <li>\r\n    <a ui-sref=\"users.list()\">\r\n      Users\r\n    </a>\r\n    <li class=\"active\">\r\n      <span>Display User</span>\r\n      <span class=\"ng-hide\" ng-show=\"status.loaded == true\">: {{user.first_name}} {{user.last_name}}</span>\r\n    </li>\r\n  </li>\r\n</ol>\r\n\r\n<div class=\"alert alert-info ng-hide\" ng-show=\"status.loaded == false\">\r\n  <span class=\"loading-spinner\"></span>\r\n  Loading user ...\r\n</div>\r\n\r\n<div class=\"ng-hide\" ng-show=\"status.loaded == true\">\r\n\r\n  <div class=\"panel\"  ng-if=\"!user.deleted_at\">\r\n    <button class=\"btn btn-warning\" ui-sref=\"users.edit({userId: user.id})\">Edit User</button>\r\n    <button class=\"btn btn-danger\" ng-click=\"removeUser(user.id)\">Delete User</button>\r\n  </div>\r\n\r\n  <div class=\"alert alert-warning\" ng-show=\"user.deleted_at\">\r\n    This user has been removed\r\n  </div>\r\n\r\n  <div class=\"page-heading\">\r\n    <h1>Display User: {{user.first_name}} {{user.last_name}} (<i>{{user.email}}</i>)</h1>\r\n  </div>\r\n\r\n  <div class=\"user-profile\">\r\n    <div class=\"col-md-8\">\r\n      <div class=\"user-profile__row\">\r\n        <div class=\"user-profile__label\">\r\n          Name\r\n        </div>\r\n        <div class=\"user-profile__value\">\r\n          {{user.first_name}} {{user.last_name}}\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"user-profile__row\">\r\n        <div class=\"user-profile__label\">\r\n          Email\r\n        </div>\r\n        <div class=\"user-profile__value\">\r\n          {{user.email}}\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"user-profile__row\">\r\n        <div class=\"user-profile__label\">\r\n          Gender\r\n        </div>\r\n        <div class=\"user-profile__value\">\r\n          <span class=\"badge\">{{user.gender}}</span>\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"user-profile__row\" ng-if=\"user.supervisor\">\r\n        <div class=\"user-profile__label\">\r\n          Supervisor\r\n        </div>\r\n        <div class=\"user-profile__value\">\r\n          <a ui-sref=\"users.display({userId: user.supervisor.id})\">{{user.supervisor.first_name}} {{user.supervisor.last_name}}</a>\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"user-profile__row\" ng-if=\"user.duties.length > 0\">\r\n        <div class=\"user-profile__label\">\r\n          Duties\r\n        </div>\r\n        <div class=\"user-profile__value\">\r\n            <span class=\"inline-listing\" ng-repeat=\"duty in user.duties\">\r\n              {{duty.name}};\r\n            </span>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"col-md-4\">\r\n      <div class=\"profile-photo\">\r\n        <img src=\"{{photoPath}}{{user.photo}}\"/>\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n"

/***/ },
/* 34 */
/***/ function(module, exports) {

	module.exports = "<ol class=\"breadcrumb\">\r\n  <li>\r\n    <a ui-sref=\"users.list()\">\r\n      Users\r\n    </a>\r\n    <li class=\"active\">\r\n      <span>Update User</span>\r\n      <span class=\"ng-hide\" ng-show=\"status.loaded == true\">: {{user.firstName}} {{user.lastName}}</span>\r\n    </li>\r\n  </li>\r\n</ol>\r\n\r\n<div class=\"alert alert-info ng-hide\" ng-show=\"status.loaded == false\">\r\n  <span class=\"loading-spinner\"></span>\r\n  Loading user ...\r\n</div>\r\n\r\n<div class=\"ng-hide\"  ng-show=\"status.loaded\">\r\n\r\n  <div class=\"page-heading\">\r\n    <h1>Create new user</h1>\r\n  </div>\r\n\r\n\r\n  <form ng-submit=\"submitForm()\">\r\n    <div class=\"alert alert-danger ng-hide\" ng-show=\"status.error\">\r\n      <span>There were errors in your submission</span>\r\n      <ul>\r\n        <li ng-repeat=\"error in status.errors\">\r\n          {{error.message}} ({{error.field}})\r\n        </li>\r\n      </ul>\r\n    </div>\r\n\r\n    <div class=\"alert alert-info\" ng-show=\"status.loading\">\r\n      <span class=\"loading-spinner\"></span>\r\n      <span>Updating user ...</span>\r\n    </div>\r\n\r\n    <div class=\"alert alert-success\" ng-show=\"status.success\">\r\n      <span>The user has been updated</span>\r\n    </div>\r\n\r\n    <div class=\"row\">\r\n\r\n      <div class=\"col-md-8\">\r\n        <div class=\"form-group\">\r\n          <label for=\"input-email\">Email Address</label>\r\n          <input type=\"email\" class=\"form-control\" id=\"input-email\" placeholder=\"Email\" ng-model=\"user.email\"/>\r\n        </div>\r\n\r\n        <div class=\"form-group\">\r\n          <label for=\"input-password\">Password</label>\r\n          <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Password\" ng-model=\"user.password\"/>\r\n        </div>\r\n\r\n        <div class=\"row\">\r\n          <div class=\"form-group col-md-6\">\r\n            <label for=\"input-first-name\">First Name</label>\r\n            <input type=\"text\" class=\"form-control\" id=\"input-first-name\" placeholder=\"First Name\" ng-model=\"user.firstName\"/>\r\n          </div>\r\n\r\n          <div class=\"form-group col-md-6\">\r\n            <label for=\"input-last-name\">Last Name</label>\r\n            <input type=\"text\" class=\"form-control\" id=\"input-last-name\" placeholder=\"Last Name\" ng-model=\"user.lastName\"/>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"form-group\">\r\n          <label for=\"input-gender\">Gender</label>\r\n          <div class=\"radio\">\r\n            <label>\r\n              <input type=\"radio\" name=\"input-gender\" id=\"input-gender-male\" value=\"M\" ng-model=\"user.gender\"/>\r\n              Male\r\n            </label>\r\n          </div>\r\n          <div class=\"radio\">\r\n            <label>\r\n              <input type=\"radio\" name=\"input-gender\" id=\"input-gender-female\" value=\"F\" ng-model=\"user.gender\"/>\r\n              Female\r\n            </label>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"alert alert-warning ng-hide\" ng-show=\"!status.supervisorsLoaded\">\r\n          <span class=\"loading-spinner\"></span> Supervisors loading ...\r\n        </div>\r\n        <div class=\"form-group ng-hide\" ng-show=\"status.supervisorsLoaded\">\r\n          <label for=\"input-supervisor\">Supervisor</label>\r\n          <ui-select\r\n            ng-model=\"user.supervisor\"\r\n            theme=\"bootstrap\"\r\n            title=\"Choose a supervisor\">\r\n            <ui-select-match placeholder=\"Try a name\">{{$select.selected.first_name}} {{$select.selected.last_name}}</ui-select-match>\r\n            <ui-select-choices repeat=\"supervisor in supervisors | filter: $select.search\">\r\n              <span>{{supervisor.first_name}} {{supervisor.last_name}}</span>\r\n            </ui-select-choices>\r\n          </ui-select>\r\n        </div>\r\n\r\n        <div class=\"alert alert-warning ng-hide\" ng-show=\"!status.dutiesLoaded\">\r\n          <span class=\"loading-spinner\"></span> Duties loading ...\r\n        </div>\r\n        <div class=\"form-group ng-hide\" ng-show=\"status.dutiesLoaded\">\r\n          <label for=\"input-duties\">Duties</label>\r\n          <ui-select\r\n            multiple\r\n            ng-model=\"user.duties\"\r\n            theme=\"bootstrap\"\r\n            title=\"Choose duties\">\r\n            <ui-select-match placeholder=\"\">{{$item.name}}</ui-select-match>\r\n            <ui-select-choices repeat=\"duty in duties | filter: $select.search\">\r\n              <span>{{duty.name}}</span>\r\n            </ui-select-choices>\r\n          </ui-select>\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"col-md-4\">\r\n        <div class=\"profile-photo\">\r\n          <img src=\"{{photoPath}}{{user.photo}}\"/>\r\n        </div>\r\n\r\n        <button type=\"button\" class=\"btn btn-default btn-upload-photo\" ng-click=\"triggerUpload()\">Upload Profile Photo</button>\r\n        <input type=\"file\" id=\"hidden-file-upload\" nv-file-select uploader=\"uploader\" class=\"ng-hide\"/>\r\n      </div>\r\n    </div>\r\n    <button type=\"submit\" class=\"btn btn-success\" ng-click=\"Submit\" ng-disabled=\"status.formNotReady\">Save</button>\r\n  </form>\r\n</div>\r\n"

/***/ }
]);