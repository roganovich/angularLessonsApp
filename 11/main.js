var app = angular.module("myApp",[]);
app.controller('myCtrl', function($scope){
    $scope.name = 'Test Roman Name';
});
app.directive('dirBar', function(){
    return {
        restrict: 'E',
        transclude: true,//ng-transclude вставить в шаблон, то что было изначально в блоке директывы
        template: 'My test template <ng-transclude></ng-transclude>',
        link: function(scope, el, attr, ctrl, transclude){
            transclude(scope,function(clone, scope){
                el.append(clone);
            })
        }
    }
});

