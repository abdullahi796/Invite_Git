angular.module('inviteApp')
.service('validate',function validateService() {
    return function(number,attendees) {
        var nums = [];
        for(var i=0;i<attendees.length;i++){
            nums[i].push(attendees.num)
        }
        nums.sort();
        attendees.sort();
        var minIndex = 0;
        var maxIndex = attendees.length - 1;
        var currentIndex;
        var currentElement;
     
        while (minIndex <= maxIndex) {
            currentIndex = (minIndex + maxIndex) / 2 | 0;
            currentElement = this[currentIndex];
     
            if (currentElement < number) {
                minIndex = currentIndex + 1;
            }
            else if (currentElement > number) {
                maxIndex = currentIndex - 1;
            }
            else {
                return true;
            }
        }
     
        return -1;        
    };
    
})