angular.module('fxMilbox').directive('fxPreviousRounds', function(){
	return {
		replace: true,
		restrict:  "E",
		templateUrl: "/views/templates/directives/fxPreviousRounds.html"
	};
});