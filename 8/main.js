var app = angular.module("myApp",[]);

app.controller("myCtrl", function($scope){
    $scope.sum1 = 'asf$1.asf25';
    $scope.sum2 = 'asf3.5$';
    $scope.sum3 = '4.39asfas';
    $scope.sum4 = '6asf.2asf1';
})

app.filter('moneyFilter', function(){
    return function(str){
        return str.replace(/[^0-9.]/g, "") + '$';
    }
})

