<html ng-app="mainApp">
<head>
    <title>Уроки по AngularJS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="ext/angular-1.7.5/angular.js" type="text/javascript"></script>
    <link href="ext/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="main.js" type="text/javascript"></script>
</head>
<body>
    <div class="container" ng-controller="mainCtrl">
        <h1>Уроки по AngularJS</h1>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>#</th><th>Тема урока</th><th>Видео</th><th></th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="lesson in lessons | orderBy:'-key'" style="{{setClass(lesson.status)}}">
                    <td>{{(lesson.key)}}</td>
                    <td> {{lesson.name}}</td>
                    <td> 
                        <a href="https://youtu.be/{{lesson.yoyube}}">
                            <img style="height: 20px" src="img/youtube.jpg"/>
                        </a>
                    </td>
                     
                    <td><a href="/lessons/{{lesson.key}}">Начать урок</a></td>
                </tr>
            </tbody>
        </table>
    </div>
 </body> 
</html>