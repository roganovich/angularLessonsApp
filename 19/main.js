var app = angular.module('myApp',['ngMockE2E']);

app.run(function($httpBackend){
    var newItems = [{name:'roma1'},{name:'roma2'},];
    $httpBackend.whenGET('http://angular.loc/json.php').respond(200,newItems);
})

app.controller('myCtrl', function($scope,$http){
    
    $scope.url ='http://angular.loc/json.php'; 
    
    $scope.sendItem = function(){
        $scope.items.push({name:$scope.item});
    }
    
    $scope.sendRequest = function(){
        $http.get($scope.url).then(successCallback, errorCallback);
        
        function successCallback(result){
            $scope.items = result.data
            console.log('success', result);
        }
        function errorCallback(result){
            console.log('error', result);
        }
    }
})