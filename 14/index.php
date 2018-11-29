<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #14</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container" ng-controller='mainCtrl'>
        <h1>Общение контроллера и директивы</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller='postCtrl'>
            <p>{{name}}</p>
            <block-dir></block-dir>
        </div>
        
         <div class="jumbotron" ng-controller='postCtrl2'>
            <p>{{name}}</p>
            <block-dir></block-dir>
        </div>
        
       
    </div>
 </body> 
</html>