var app = angular.module('app', []).config(['$httpProvider','$interpolateProvider', function($httpProvider, $interpolateProvider){

	//Change the default way to include angular js code into views {{}} -> {[{}]}
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');

    //Add the token to all the http requests
	$httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
	$httpProvider.defaults.headers.put['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
	$httpProvider.defaults.headers.get['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
	$httpProvider.defaults.headers.delete['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');

    
}]);;
