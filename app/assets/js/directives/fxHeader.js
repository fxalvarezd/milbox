angular.module('fxMilbox').directive('fxHeader', function(){
	return {
		replace: true,
		restrict:  "E",
		templateUrl: "/views/templates/directives/fxHeader.html",
		controller: function($scope, $location){
			$scope.isPage = function(name){
				return new RegExp("/" + name + "($|/)").test($location.path());
			};
			$scope.$on("$routeChangeSuccess", function($currentRoute, $previousRoute) {
				$('#main-nav-check').removeAttr('checked');
			});
		}
	};
});