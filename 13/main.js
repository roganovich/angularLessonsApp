var app = angular.module("myApp",[]);

app.directive('blockDir', function(){
    return {
        templateUrl : 'tpl/block.html',
        link: function(scope, el, attr){
            scope.items = [
                {name:'roma'},
                {name:'olya'},
                {name:'dastin'},
                {name:'hofman'},
            ]
        }
    }
});
