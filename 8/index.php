<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #8</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Фильтры</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller="myCtrl">
            <h2>{{sum1 | moneyFilter}}</h2>
            <h2>{{sum2 | moneyFilter}}</h2>
            <h2>{{sum3 | moneyFilter}}</h2>
            <h2>{{sum4 | moneyFilter}}</h2>
        </div>
       
    </div>
 </body> 
</html>