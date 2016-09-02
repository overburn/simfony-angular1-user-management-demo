module.exports = {
  apiBaseUrl: 'http://demo.local.ro:180/',
  apiUrl: this.apiBaseUrl+'app_dev.php',

  getApiUrl: function() {
    return this.apiBaseUrl+'app_dev.php';
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

  getAuthUrl: function() {
    return this.getApiUrl()+this.methods.authenticate;
  },

  getCreateUserUrl: function() {
    return this.getApiUrl()+this.methods.userCreate;
  },

  getUpdateUserUrl: function(userId) {
    return this.getApiUrl()+this.methods.userUpdate+"/"+userId;
  },

  getPhotoUploadUrl: function() {
    return this.getApiUrl()+this.methods.photoUpload;
  },

  getUserListUrl: function() {
    return this.getApiUrl()+this.methods.userList;
  },

  getUserDisplayUrl: function(userId) {
    return this.getApiUrl()+this.methods.userDisplay+"/"+userId;
  },

  getRemoveUserUrl: function(userId) {
    return this.getApiUrl()+this.methods.userRemove+"/"+userId;
  },

  getDutyListUrl: function() {
    return this.getApiUrl()+this.methods.dutyList;
  }
}
