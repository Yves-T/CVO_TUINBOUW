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
            Data.createPlant(vm.formData, function (result) {
                console.log(result);
                $state.go('qrCode', {"plantId": result});
            }, function (error) {
                console.log(error);
            });
        };

        vm.isStateActive = function(someState) {
            return ($state.current.name.localeCompare(someState) == 0) ? 'active' : '';
        };
    }
})();
