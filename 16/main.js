var app = angular.module("myApp",[]);


app.controller('postCtrl', function($scope){

    $scope.name = 'test1';
    $scope.color = 'white';
    $scope.count = 1;
    
    $scope.mytextfunction = function(){
        $scope.count++;
    }
})

app.directive('blockDir', function($templateCache){
    
    return {
        scope:{
            name: '@', //<block-dir name="test2"> передать в изолированный scope переменную
            color: '=', //двух стронний биндинг. передача и изменение
            myfunc: '&', //вызов функии из контроллера
            count: '=',
        },
        template:'<div>'+
                '<p>My dire name:{{name}}<input type="text" ng-model="name"></p>'+
                '<p>{{color}}<input type="text" ng-model="color"></p>'+
                '<h1>{{count}}</h1><div><button ng-click="myfunc()">Жмых2</button></div>'+
                '</div>',
        link: function(scope, el, attr){
        }
    }
});
