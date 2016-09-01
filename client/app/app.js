require('../node_modules/bootstrap/dist/css/bootstrap.css');
require('./styles/main.css');

require('./services/services.js');
require('./controllers/controllers.js');

angular.module('app', ['ui.router', 'controllers', 'services'])
  .constant('config', require('../config/app.config.js'))
  .config(['$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {
      $urlRouterProvider.otherwise('/');

      $stateProvider
        .state('home', {
          url: '/',
          template: require('./templates/home.tpl.html'),
          controller: 'HomeController'
        })
        .state('test', {
          url: '/test',
          template: require('./templates/test.tpl.html'),
          controller: 'TestController'
        });


    }
  ]);
