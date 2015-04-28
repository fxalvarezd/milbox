angular.module('fxMilbox').directive('fxCurrentRound', function(){
	return {
		replace: true,
		restrict:  "E",
		templateUrl: "/views/templates/directives/fxCurrentRound.html"
	};
});