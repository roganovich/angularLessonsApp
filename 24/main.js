var app = angular.module("myApp",['ngRoute']);

app.config(function($routeProvider){
    
    $routeProvider
        .when('/',{
            templateUrl:'tpl/main.html',
        })
        .when('/posts',{
            templateUrl:'tpl/posts/index.html',
            controller: 'postsCtrl',
        })
        .when('/posts/:postId',{
            templateUrl:'tpl/posts/view.html',
            controller: 'postCtrl',
        })
        .otherwise({
            templateUrl:'tpl/404.html',
        })
});

app.run(function($rootScope){
    console.log('run');
    $rootScope.$on('$routeChangeStart',function(event, curent, previos, reject){
        console.log('to ',curent);
        console.log('from ',previos);
    })
    
    $rootScope.$on('$routeChangeSuccess',function(event, curent, previos, reject){
        /*создаем новую переменную*/
        $rootScope.curentPath = curent.$$route.originalPath
    })
});

app.controller('pathCtrl', function(){
})

app.controller('postsCtrl',function($scope,postsFactory){
    $scope.items = postsFactory.items;
});

app.controller('postCtrl',function($scope,$routeParams,postsFactory){
    $scope.items = postsFactory.items;
    var postId = Number($routeParams.postId);
    $scope.item = _.find($scope.items,{id:postId}); //библиотека lodash
});

app.factory('postsFactory', function(){
    return {
            items:[
                {id:1,name:'roma'},
                {id:2,name:'olya'},
                {id:3,name:'dastin'},
                {id:4,name:'hofman'},
            ]
        };
});


