(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('HeaderController', HeaderController);


    function HeaderController($state, $location, Auth, $rootScope) {

        var vm = this;

        if (!$rootScope.refreshHandler && Auth.isAuthenticated()) {
            Auth.startRefreshToken();
        }

        vm.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };

        vm.logout = function () {
            if ($rootScope.refreshHandler) {
                window.clearInterval($rootScope.refreshHandler);
            }

            Auth.logout(function () {
                $state.go('auth', {});
            });
        };

        vm.goto = function (state) {
            $state.go(state, {});
        };

    }
})();
