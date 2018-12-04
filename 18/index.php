<html ng-app="myApp">
<head>
    <title>Урок по AngularJS #18</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="../ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>http запросы</h1>
        <div class="row">
            <?php include_once  '../menu.php'; ?>
        </div>
        
        <div class="jumbotron" ng-controller="myCtrl">
            <form>
                <div class="form-control">
                    <input type="text" ng-model="url"/>
                </div>
                <button class="btn btn-primary" ng-click="sendRequest()">Send Request</button>
            </form>
            
            
            
            <table class="table table-striped">
                <tbody>
                    <tr ng-repeat="item in items">
                        <td>{{item}}</td>
                    </tr>
                </tbody>
            </table>
            
            
            <form>
                <div class="form-control">
                    <input type="text" ng-model="item"/>
                </div>
                <button class="btn btn-primary" ng-click="sendItem()">Send Item</button>
            </form>
        </div>
        
       
    </div>
 </body> 
</html>