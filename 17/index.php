<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #17</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Transclude element в директивах</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron">
            <form class="form" form-block="red">
                
                <div class="form-group">
                    <label class="label">Email</label>
                    <input type="text" placeholder="Enter you email">
                </div>
                <div class="form-group">
                    <label class="label">Password</label>
                    <input type="text" placeholder="Enter you password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
       
    </div>
 </body> 
</html>