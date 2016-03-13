(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('HarvestController', harvestController);

    function harvestController($state, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantMedical', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantMaintenance', {});
            }
        };

    }
})();
