var app = angular.module("myApp",['ngRoute']);

app.controller('dataAttr',function($scope){
    $scope.items = [
                {name:'roma'},
                {name:'olya'},
                {name:'dastin'},
                {name:'hofman'},
            ];
});


app.config(function($routeProvider){
    
    $routeProvider
        .when('/',{
            templateUrl:'tpl/main.html',
            controller: 'dataAttr',
        })
        .when('/second',{
            templateUrl:'tpl/second.html',
            controller: 'dataAttr',
        })
        .when('/third',{
            templateUrl:'tpl/third.html',
            controller: 'dataAttr',
        })
});
