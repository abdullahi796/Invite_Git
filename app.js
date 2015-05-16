angular.module('inviteApp',['firebase',])
.controller('mainController',function($scope,data,$window) {
    $scope.attendees = data();
    $scope.info = "The party is at May 09. The address is 550 s 68th ave"
    $scope.formShow = false;
    $scope.textShow = true;
    $scope.showShare = false;
    $scope.mphoneNumber = 0;
    $scope.token = $window.token;
    $scope.mLink = "https://invite-abdullahi11.c9.io/index.php?id=" + $scope.token;
    alert($scope.token)
    
    $scope.contact = {
        number: $scope.attendees.length + 1,
        phoneNumber: 0
    };

    $scope.toggle = function() {
            $scope.formShow = !$scope.formShow;
            $scope.showShare = !$scope.showShare;
    }
    $scope.showText = function() {
        $scope.textShow = !$scope.textShow;
        $scope.formShow = !$scope.formShow;
    }

    $scope.addContact = function() {
        $scope.attendees.$add(
                {
                    number: $scope.attendees.length + 1,
                    mphoneNumber: $scope.mphoneNumber
                }
          );      
            $scope.mphoneNumber = 0;
    }
    $scope.share = function() {
     $scope.formShow = !$scope.formShow;
     $scope.showShare = !$scope.showShare; 
    }

}); 