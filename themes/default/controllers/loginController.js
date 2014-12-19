// LOGIN CONTROLLER

// defining controller
var LoginController = function($scope){
	
	// initialize QapTcha captcha markup
	$('.addQapTcha').QapTcha({disabledSubmit:true,autoRevert:true,autoSubmit:false});

};

// preventing minifiers to change following names
LoginController.$inject = ['$scope'];

// adding controller to module
angular.module('tsv3').controller('LoginController', LoginController);