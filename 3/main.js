var app = angular.module("myApp",[]);

app.controller("myCtrlFirst", function($scope, mainFactory){
    
    $scope.mf = mainFactory;
    $scope.name = 'Мой простой контроллер.'+$scope.mf.msg;
    $scope.testField = 'Тестовая myCtrlFirst'
})

app.controller("myCtrlSecond", function($scope, mainFactory){
    $scope.mf = mainFactory;
    
    $scope.name = 'Мой простой контроллер myCtrlSecond';
    $scope.testField = 'Тестовая myCtrlSecond'
    
})

app.factory("mainFactory", function(){
    return {
        msg:'Мое сообщение всем землянам!'
    }
})
