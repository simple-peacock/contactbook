// setting up our our
var app = angular.module('contactbook', ['ngRoute']);

// configure our frontend routes
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider

        // route for the home page
        .when('/', {
            templateUrl : 'partials/contacts.html',
            controller  : 'mainController'
        })

        // route for the new contact form
        .when('/new', {
            templateUrl : 'partials/new.html',
            controller  : 'mainController'
        });
}]);

