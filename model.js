angular.module('inviteApp')
.factory('data',function dataFactory($firebaseArray) {
    return function() {
        var ref = new Firebase('https://invite.firebaseio.com/');
        return $firebaseArray(ref);
    }
    
})