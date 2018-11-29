<html>
<head>
    <title>Урок по AngularJS #1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body ng-app>
    <div class="container">
        <h1>Простая модель. Двусторонний датабиндинг</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>

        <div class="jumbotron">
            <form>
                <input type="text" name="name" ng-model="name">
            </form>
            <h3>{{'h3 ' + name}}</h3>
            <h4>{{'h4 ' + name}}</h4>
            <h5>{{'h5 ' + name}}</h5>
            <h6>{{'h6 ' + name}}</h6>
        </div>
    </div>
 </body> 
</html>