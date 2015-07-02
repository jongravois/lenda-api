(function() {

	'use strict';

	angular
		.module('authApp')
		.controller('AuthController', AuthController);


	function AuthController($auth, $state, $http, $rootScope) {

		var vm = this;

		vm.loginError = false;
		vm.loginErrorText;

		vm.login = function() {

			var credentials = {
				email: vm.email,
				password: vm.password
			}

			$auth.login(credentials).then(function() {

				// Return an $http request for the now authenticated
				// user so that we can flatten the promise chain
				return $http.get('api/authenticate/user');

			// Handle errors
			}, function(error) {
				vm.loginError = true;
				vm.loginErrorText = error.data.error;
			}).then(function(response) {
				var user = JSON.stringify(response.data.user);
				localStorage.setItem('user', user);
				$rootScope.authenticated = true;
				$rootScope.currentUser = response.data.user;
				$state.go('users');
			});
		}
	}

})();