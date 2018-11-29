var app = angular.module("myApp",[]);

app.controller("myCtrl", function($scope, myFactory){
    $scope.name ='test';
    $scope.mf = myFactory;
    
    $scope.writeMsg = function($msg){
        return $msg;
    }
    
    $scope.setName = function(){
        $scope.name = $scope.newText;
    }
    

})

app.factory('myFactory', function(){
    return {
        seyHello: function(){
            return 'test test myFactory'
        },
    }
})

