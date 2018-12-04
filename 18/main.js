var app = angular.module('myApp',[]);
app.controller('myCtrl', function($scope,$http){
    
    $scope.url ='http://angular.loc/json.php'; 
    
    $scope.sendItem = function(){
        $scope.items.push($scope.item);
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