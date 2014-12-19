(function(){

	var app = angular.module('tsv3', ['ngRoute']);

	app.config(function($routeProvider){

		$routeProvider
			.when('/', {
				controller: 'HomeController',
				templateUrl: 'themes/default/views/home.html'
			})
			.when('/login', {
				controller: 'LoginController',
				templateUrl: 'themes/default/views/login.html'
			})
			.otherwise( { redirectTo: '/' } );

	});

})();