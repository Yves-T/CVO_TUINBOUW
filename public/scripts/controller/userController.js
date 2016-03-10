(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('UserController', UserController);

    function UserController($state, Auth) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        var vm = this;

        vm.users;
        vm.error;


        vm.logout = function () {
            Auth.logout(function () {
                $state.go('auth', {});
            });
        };
    }

})();
