<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #6</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Почему $scope это плохо</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller="myMainCtrl as myMain">
            <p>{{text}}</p>
            <button class="btn btn-danger" ng-click="writeToText(myMain.name)">Жмых</button>
            <div ng-controller="myFirstCtrl as myFirst">
                <button class="btn btn-primary" ng-click="writeToText(myFirst.name)">Жмых</button>
                <div ng-controller="mySecondCtrl">
                    <button class="btn btn-success" ng-click="writeToText(mySecond.name)">Жмых</button>
                </div>
            </div>
        </div>
       
    </div>
 </body> 
</html>