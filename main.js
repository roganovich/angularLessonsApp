var app = angular.module("mainApp",[]);

app.controller("mainCtrl", function($scope){
    $scope.lessons = [
        {key:1,name:'Простая модель. Двусторонний датабиндинг',yoyube:'g41QNEqTE-E',status:true},
        {key:2,name:'Простой контроллер',yoyube:'mB8Exwucp6o',status:true},
        {key:3,name:'Обмен данными между контроллерами. Фабрика',yoyube:'2tx1B8zXNqo',status:true},
        {key:4,name:'Методы контроллера',yoyube:'-1Y0HoNEjBk',status:true},
        {key:5,name:'Наследование контроллеров',yoyube:'IYt1nZmi22w',status:true},
        {key:6,name:'Почему $scope это плохо',yoyube:'aMQF_uS1gIA',status:true},
        {key:7,name:'Пишем простую директиву',yoyube:'D5tZLRw_Yvo',status:true},
        {key:8,name:'Фильтры',yoyube:'0sbNTojtwUo',status:true},
        {key:9,name:'Ограничения в директивах',yoyube:'_UwTqAX3hpA',status:true},
        {key:10,name:'Шаблоны в директивах',yoyube:'_Xm9K4sZMIw',status:true},
        {key:11,name:'Transclude в директивах',yoyube:'MUV6Qm6Mg50',status:true},
        {key:12,name:'TemplateUrl в директивах',yoyube:'YOiPbufU8HQ',status:true}, 
        {key:13,name:'Кешируем шаблоны',yoyube:'Ij2VWxpnNPo',status:true}, 
        {key:14,name:'Общение контроллера и директивы',yoyube:'qioxZNuJDP0',status:false}, 
    ]
    
    $scope.setClass = function(status){
        return (status)?' background-color: #b8daff;':'';
    }
})
