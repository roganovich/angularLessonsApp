var app = angular.module("myApp",[]);

app.controller('mainCtrl', function($scope){
    $scope.getData = function(data){
        return data;
    }
});

app.controller('postCtrl', function($scope){
    $scope.itemsData = [
                {name:'roma'},
                {name:'olya'},
                {name:'dastin'},
                {name:'hofman'},
            ];
    $scope.name = 'test1';
})

app.controller('postCtrl2', function($scope){
    $scope.itemsData = [
                {name:'roma'},
            ];
    $scope.name = 'test2';
})

app.directive('blockDir', function($templateCache){
    
    return {
        scope:true, //false - разрешит перезаписывать данные из контроллера, true - не даст перезаписать данные
        restrict: 'E', //дириктива берется от элеента <block-dir></block-dir>
        templateUrl : 'tpl/block.html', //ссылка(ид шаблона). 
        link: function(scope, el, attr){
            scope.items = scope.getData(scope.itemsData) // дириктива наследует скоп контроллера
            scope.name = 'test test';
        }
    }
});
