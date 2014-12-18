(function(){

	var app = angular.module('tsv3', ['ngRoute']);

	app.config(function($routeProvider){

		$routeProvider
			.when('/', {
				controller: 'HomeController',
				templateUrl: 'app/views/home.html'
			})
			.when('/login', {
				controller: 'LoginController',
				templateUrl: 'app/views/login.html'
			})
			.otherwise( { redirectTo: '/' } );

	});

})();