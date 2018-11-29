var app = angular.module("myApp",[]);

app.controller("myMainCtrl", function($scope){
    this.name = "Самый главный Жмых"
    $scope.writeToText = function(text){
        console.log('text',text);
        $scope.text = text
    }
})

app.controller("myFirstCtrl", function(){
    this.name = "First Жмых"
})

app.controller("mySecondCtrl", function($scope){
    this.name = "Second Жмых";
    $scope.mySecond = this;
})

