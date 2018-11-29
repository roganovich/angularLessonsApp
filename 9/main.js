var app = angular.module("myApp",[]);

app.controller("myCtrl", function($scope){
    $scope.name ='Attributes';
})

app.directive('barDir', function(){
    return {
        //restrict:'A', // Через аттрибут 
        //restrict:'A', // Через элемент
        //restrict:'C', // Через class
        restrict:'M', // Через комментарий
        //restrict:'AECM', // Все варианта
        link: function($scope, element, attr){
            element.text('Complite');
        }
    }
})
