var dashboard_app = angular.module('dashboard_app', ['ngRoute']);
 
var dir_route = "/Vista/templates/dashboard/";
 
dashboard_app.config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider) {
    
    $routeProvider

        // route for the home page
        .when('/', {
            templateUrl : dir_route+'main.html',
             controller  : 'main_controller'
        })
        
        .otherwise({
            redirectTo: '/'
        });
}]);

// Controlador del home
dashboard_app.controller('main_controller', function($scope) {
    $('#myStat2').circliful();
});