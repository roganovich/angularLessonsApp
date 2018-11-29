var app = angular.module("myApp",[]);

app.directive("mydirective", function(){
    return {
        /*link вызывается после формирования DOM объекта*/
        link: function($scope, element, attributes){
            element.text('ON')
            element.on('click', function(){
                if(element.text() === 'ON'){
                    element.text('OFF');
                }else{
                    element.text('ON');
                }
            })
        } 
    }
    /* короткая запись директивы
    return function($scope, element, attributes){
    }
    */
})

