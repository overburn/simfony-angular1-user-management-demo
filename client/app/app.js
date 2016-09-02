require('../node_modules/bootstrap/dist/css/bootstrap.css');
require('../node_modules/datatables.net-bs/css/dataTables.bootstrap.css');
require('../node_modules/datatables/media/css/jquery.dataTables.css');
require('../node_modules/ui-select/dist/select.css');

require('./styles/main.css');

require('./services/services.js');
require('./controllers/controllers.js');

angular.module('app', ['ui.router', 'ui.select', 'ngStorage', 'angularFileUpload', 'datatables', 'controllers', 'services'])
  .constant('config', require('../config/app.config.js'))
  .run(['$rootScope', '$localStorage', '$state', '$http',   function($rootScope, $localStorage, $state, $http) {
    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {

      if (toState.isAuthenticated == true ) {
        var token = $localStorage.currentUser.token;

        if(!token) {
            $state.go('login');
            event.preventDefault();
        }

        $http.defaults.headers.common.Authorization = 'Bearer ' + token;
      }
    });
  }])
  .config(['$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {

      $urlRouterProvider.otherwise('/');

      $stateProvider
        .state('login', {
          url: '/login',
          template: require('./templates/login.tpl.html'),
          controller: 'LoginController'
        })
        .state('users', {
          template: require('./templates/users.tpl.html'),
          controller: 'UserController'
        })
        .state('users.list', {
          url: '/',
          isAuthenticated: true,
          template: require('./templates/listUsers.tpl.html'),
          controller: 'UserListController'
        })
        .state('users.create', {
          url: '/users/create',
          isAuthenticated: true,
          template: require('./templates/createUser.tpl.html'),
          controller: 'UserCreateController'
        })
        .state('users.display', {
          url: '/users/{userId}',
          isAuthenticated: true,
          template: require('./templates/displayUser.tpl.html'),
          controller: 'UserDisplayController'
        })
        .state('users.edit', {
          url: '/users/{userId}/edit',
          isAuthenticated: true,
          template: require('./templates/editUser.tpl.html'),
          controller: 'UserEditController'
        });


    }
  ]);
