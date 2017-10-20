var app = angular.module('myApp', ['angularMoment','ngCookies','ngRoute','ngSanitize']);
    app.controller('myCtrl', function($scope, $location, $http, $cookies,$sce,$filter,$window,$interval) {
  
  // bind the controller to vm (view-model)
  var vm = this;
  
  vm.time = new Date();
  $scope.data = JSON.parse($location.search().vc);
    console.log($scope.data);
	$http({
        method:'post',
        url: "http://t-booking.com/web/jquery/PHP/voucher.php",
        data: $.param({id: $scope.data}),
        headers : {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function(res){
        console.log(res)
       // alert("aa")



    }).error(function(err){
    	console.log(err)
    });


  
});
