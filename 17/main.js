var myApp = angular.module('myApp',[]);

myApp.directive('formBlock',function(){
    return {
        transclude: 'element',//true занесет в clone содержимое блока, а element - сам блок с содержимым 
        link : function(scope, element, attribute, ctrl, transclude){
            transclude(scope,function(clone, scope){
                console.log(clone);
            })
        }
    }
});