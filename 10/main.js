var app = angular.module("myApp",[]);

app.controller("myCtrl", function($scope){
    $scope.name ='test';
})
app.directive('dirTable', function(){
    var items = [{name:'Roman'},
                {name:'Olga'},
                {name:'Dastin'},
                {name:'Carl'},
                {name:'Gustaf'}];
    return {
        template: "<table class=\"table\">" +
                "<tbody>"+
                "<tr ng-repeat=\"(key, item) in items\">"+
                "<td>{{key+1}}</td><td>{{item.name}}</td>"+
                "</tr>"+
                "</tbody>"+
                "</table>",
        link: function($scope, element, attr){
            console.log('test');
            $scope.items = items
        }
        
    }
});

