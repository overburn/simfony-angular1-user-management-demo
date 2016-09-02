module.exports = angular.module('controllers')
  .controller('UserEditController', ['$scope','$state', '$localStorage', '$stateParams', 'FileUploader','config', 'ApiService',
  function($scope, $state, $localStorage, $stateParams, FileUploader, config, ApiService) {
    $scope.supervisors = [];
    $scope.duties = [];

    $scope.status = {
      supervisorsLoaded: false,
      dutiesLoaded: false,
      formNotReady: true,
      checkIfFormReady: function() {
        this.formNotReady = !(this.supervisorsLoaded && this.dutiesLoaded);
      },
      error: false,
      success: false,
      loading: false,
      loaded: false,
      errors: []
    }

    ApiService.getUser($stateParams.userId).then(function(response) {

      //TODO: fix the naming issues at the source if there's time
      var tmp = response.data;
      tmp.firstName = tmp.first_name;
      tmp.lastName = tmp.last_name;
      delete tmp.first_name;
      delete tmp.last_name;


      $scope.user = tmp;
      $scope.status.loaded = true;
    });

    ApiService.getUsers().then(function(response) {
      $scope.supervisors = response.data;
      $scope.status.supervisorsLoaded = true;
      $scope.status.checkIfFormReady();
    });

    ApiService.getDuties().then(function(response) {
      $scope.duties = response.data;
      $scope.status.dutiesLoaded = true;
      $scope.status.checkIfFormReady();
    });

    $scope.triggerUpload = function() {
      angular.element('#hidden-file-upload').trigger('click');
    }

    $scope.user = {
      email: '',
      password: '',
      firstName: '',
      lastName: '',
      gender: '',
      photo: 'placeholder_avatar.png',
      supervisor: 0,
      duties: []
    }

    $scope.uploader = new FileUploader({
      headers: { "Authorization": "Bearer " + $localStorage.currentUser.token },
      url: config.getPhotoUploadUrl(),
      autoUpload: true,
       onSuccessItem: function(id,response,status,headers){
         $scope.user.photo = response;
       }
    });

    $scope.submitForm = function() {
      $scope.status.error = false;
      $scope.status.loading = true;

      ApiService.updateUser($scope.user).then(function(response) {
        $scope.status.loading = false;
        $scope.status.success = true;

        //$state.go('users.display', {userId: response.data.id});
      }).catch(function(response) {
        $scope.status.error = true;
        $scope.status.loading = false;
        $scope.status.success = false;
        $scope.status.errors = [];

        if(response.data.form.children) {
            var responseErrors = response.data.form.children;

            for(var i in responseErrors) {
              if(responseErrors[i].errors) {
                $scope.status.errors.push({field: i, message: responseErrors[i].errors[0]});
              }
            }
        }
      });
    }




  }]);
