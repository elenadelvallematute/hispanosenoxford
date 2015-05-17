app.controller('mainCtrl', ['$scope', '$http', function($scope, $http) {

	$scope.data = {

	};

	$scope.login = function(){
	  	
	  	if( $scope.email && $scope.password ){
	  		$http.post('auth/login', 
	  			{ 
	  				email : $scope.email,
	  				password: $scope.password
	  			}
	  		).success(function(data, status, headers, config) {
				console.log(data);
		  	}).error(function(data, status, headers, config) {
		    	console.log(data);
		  	});	
	  	}
	}

}]);