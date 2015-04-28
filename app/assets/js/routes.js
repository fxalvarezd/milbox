angular.module('fxMilbox').config(function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl: "/views/templates/home.html",
			controller: "IndexController"
		})

		.when('/account', {
			templateUrl: "/views/templates/account.html",
			controller: "IndexController"
		})

		.when('/buy', {
			templateUrl: "/views/templates/buy.html",
			controller: "IndexController"
		})

		.when('/how', {
			templateUrl: "/views/templates/how.html",
			controller: "IndexController"
		})

		.when('/results', {
			templateUrl: "/views/templates/results.html",
			controller: "IndexController"
		})
});