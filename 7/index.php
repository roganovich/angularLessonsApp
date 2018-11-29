<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #7</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Пищем простую директиву</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron">
            <button class="btn btn-primary" mydirective></button>
            <button class="btn btn-success" mydirective></button>
            <button class="btn btn-danger" mydirective></button>
        </div>
       
    </div>
 </body> 
</html>