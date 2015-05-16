angular.module('inviteApp')
.factory('data',function dataFactory($firebaseArray,$window) {
    return function() {
        var token = $window.token;
        var ref = new Firebase('https://invite.firebaseio.com/' + token);
        return $firebaseArray(ref);
    }
    
})  