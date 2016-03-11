(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('HeaderController', HeaderController);


    function HeaderController($state, $location, Auth) {

        var vm = this;

        vm.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };

        vm.logout = function () {
            Auth.logout(function () {
                $state.go('auth', {});
            });
        };

    }
})();
