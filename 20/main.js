var app = angular.module('myApp',[]);


app.directive('blockDir', function(){
    return {
        restrict: 'E',
        compile: function(element){
            var blueBlock = angular.element('<div style="background-color: blueviolet"></div>');
            var html = element.html();
            blueBlock.append(html);
            element.replaceWith(blueBlock);
            
        }
    }
});