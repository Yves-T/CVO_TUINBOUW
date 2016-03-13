(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('MaintenanceController', MaintenanceController);

    function MaintenanceController($state, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantCultivars', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantHistory', {});
            }
        };

    }
})();
