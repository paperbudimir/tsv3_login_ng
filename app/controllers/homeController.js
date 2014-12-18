// HOMEPAGE CONTROLLER 

// defining controller
var HomeController = function($scope){

	$scope.girls = [
		{
			"id" : 1,
			"name" : "isida",
			"title" : "Hhot"
		},
		{
			"id" : 2,
			"name" : "isida2",
			"title" : "Hhot2"
		}
	];

};

// preventing minifiers to change following names
HomeController.$inject = ['$scope'];

// adding controller to module
angular.module('tsv3').controller('HomeController', HomeController);