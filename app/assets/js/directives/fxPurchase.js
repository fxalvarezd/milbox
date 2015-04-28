angular.module('fxMilbox').directive('fxPurchase', function(){
	return {
		replace: true,
		restrict:  "E",
		templateUrl: "/views/templates/directives/fxPurchase.html"
	};
});