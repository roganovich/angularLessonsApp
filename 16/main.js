var app = angular.module("myApp",[]);


app.controller('postCtrl', function($scope){

    $scope.name = 'test1';
})

app.directive('blockDir', function($templateCache){
    
    return {
        scope:true, //false - разрешит перезаписывать данные из контроллера, true - не даст перезаписать данные
        restrict: 'E', //дириктива берется от элеента <block-dir></block-dir>
        template:'<div><input type="text" ng-model="name"></div><p>{{name}}</p>',
        link: function(scope, el, attr){
            scope.name = 'test2';
        }
    }
});
