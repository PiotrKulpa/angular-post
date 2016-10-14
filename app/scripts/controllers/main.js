'use strict';

/**
 * @ngdoc function
 * @name angularPostApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the angularPostApp
 */
angular.module('angularPostApp')
  .controller('MainCtrl', ['$scope','$http','$location',function ($scope, $http, $location) {

	  	$scope.master = {};
	    $scope.activePath = null;


	    $scope.New_Customer = function(customer, AddNewForm) {
	    	console.log(customer);

		    $http.post('api/New_Customer', customer).success(function(){
			    $scope.reset();
			    $scope.activePath = $location.path('/');
		    });

		    $scope.reset = function() {
		    	$scope.customer = angular.copy($scope.master);
		    };

		    $scope.reset();
	    };
    
  }
  ]);
