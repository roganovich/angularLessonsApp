<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #23</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <script src="../ext/angular-1.7.5/angular-route.js" type="text/javascript"></script>
    <script src="../ext/lodash.js" type="text/javascript"></script>
    
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container" >
        <h1>Ng route. Пишем мини блог</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron">
            
            <nav>
            <ul class="pagination">
              <li class="page-item"> <a class="page-link" href="#!/">Главная</a></li>
              <li class="page-item"> <a class="page-link" href="#!/posts">Страницы</a></li>
            </ul>
            </nav>
            <ng-view>
                
            </ng-view>
        </div>
        
        
       
    </div>
 </body> 
</html>