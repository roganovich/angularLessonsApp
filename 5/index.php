<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #5</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Наследование контроллеров</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller="myMainCtrl">
            <div ng-controller="myFirstCtrl">
                <button class="btn btn-primary" ng-click="clickLog(name)">Жмыхнуть</button>
            </div>
            <div ng-controller="mySecondCtrl">
                <button class="btn btn-success" ng-click="clickLog(name)">Жмыхнуть</button>
            </div>
        </div>
       
    </div>
 </body> 
</html>