var app = angular.module("myApp",[]);

app.run(function($templateCache){
    //заменяет текст шалона по ссылке(ид шаблона)
    $templateCache.put('tpl/block.html','<h1>New Template</h1>');
});

app.directive('blockDir', function($templateCache){
    var itemsData = [
                {name:'roma'},
                {name:'olya'},
                {name:'dastin'},
                {name:'hofman'},
            ];
    return {
        restrict: 'E', //дириктива берется от элеента <block-dir></block-dir>
        templateUrl : 'tpl/block.html', //ссылка(ид шаблона). 
        link: function(scope, el, attr){
            scope.items = itemsData
        }
    }
});
