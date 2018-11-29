<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Методы контроллера</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller="myCtrl">
            <h2>{{name}}</h2>
            <p>{{writeMsg('Тестовое сообщение')}}</p>
            <form>
                <input type="text" ng-model="newText">
                <input type="submit" value="Отправить" ng-click="setName()">
            </form>
            <p>{{mf.seyHello()}}</p>
        </div>
       
    </div>
 </body> 
</html>