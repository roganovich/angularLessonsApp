<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #20</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <script src="../ext/angular-1.7.5/angular-mocks.js" type="text/javascript"></script>
    
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Compile в директивах</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron">
            <block-dir>
                <div>
                    <form>
                        <label>My Form</label>
                        <input type="text" ng-model="name">
                        <br>
                        <h2>Name: {{name}}</h2>
                    </form>
                </div>
            </block-dir>
        </div>
        
       
    </div>
 </body> 
</html>