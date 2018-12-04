<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #16</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Изолированый скоуп в директивах</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller='postCtrl'>
            <div>My ctrl name:{{name}}</div>
            <div>My ctrl color:{{color}}</div>
            <h1>{{count}}</h1>
            <div>
                <button ng-click="mytextfunction()">Жмых1</button>
            </div>
            ----------------------------------------
            <block-dir name="{{name}}" color="color" count="count" myfunc="mytextfunction()"></block-dir>
        </div>
        
       
    </div>
 </body> 
</html>