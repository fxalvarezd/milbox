angular.module('fxMilbox').directive('fxFooter', function(){
	return {
		replace: true,
		restrict:  "E",
		templateUrl: "/views/templates/directives/fxFooter.html"
	};
});