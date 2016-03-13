(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('HeaderController', HeaderController);


    function HeaderController($state, $location, Auth, Data, $rootScope) {

        var vm = this;

        if (!$rootScope.refreshHandler && Auth.isAuthenticated()) {
            Data.refreshToken(function (succes) {
                console.log('refreshed token');
            }, function (error) {
                console.log('refresh token failed');
            });
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
