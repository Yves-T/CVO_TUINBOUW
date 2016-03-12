(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('FormController', FormController);


    function FormController(Auth, $state, $rootScope, Data, $http) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        $rootScope.currentUser = Auth.currentUserName();

        vm.formData = {};

        vm.processForm = function () {
            $http.post('http://tuinbouw.app/api/plant', vm.formData).success(function (result) {
                console.log(result);
            }).error(function (error) {
                console.log(error);
            });
        };
    }
})();
