var app = angular.module("myApp",[]);

app.controller("myMainCtrl", function($scope){
    $scope.name = "Самый главный Жмых"
    $scope.clickLog = function(str){
        console.log(str);
    }
})

app.controller("myFirstCtrl", function($scope){
    $scope.name = "First Жмых"
    $scope.clickLog = function(str){
        console.log(str);
    }
})

app.controller("mySecondCtrl", function($scope){
    $scope.name = "Second Жмых"
    $scope.clickLog = function(str){
        console.log(str+' test test ');
    }
})

