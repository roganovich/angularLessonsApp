<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #21</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Ng-cloak и ng-bind</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-cloak>
           {{1+1}}
        </div>
        <div ng-bind="{{1+1}}"></div>
       
    </div>
    
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <script src="../ext/angular-1.7.5/angular-mocks.js" type="text/javascript"></script>
    
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">

    
    <script src="main.js" type="text/javascript"></script>
 </body> 
 
</html>