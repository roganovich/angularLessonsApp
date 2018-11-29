<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
       
        <h1>Обмен данными между контроллерами. Фабрика</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        <div class="jumbotron" ng-controller="myCtrlFirst">
            <h2>{{name}}</h2>
            <form class="form">
                <input class="form-control" type="text" ng-model="testField" />
            </form>
            <p>{{testField}}</p>
        </div>
        
        <div class="jumbotron" ng-controller="myCtrlSecond">
            <h2>{{name}}</h2>
            <form class="form">
                <input class="form-control" type="text" ng-model="testField" />
            </form>
            <p>{{testField}}</p>
            <p>{{mf.msg}}</p>
        </div>
       
    </div>
 </body> 
</html>