(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('HistoryController', PlantHistoryController);

    function PlantHistoryController($state, $scope) {

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
                $state.go('form.plantCultivars', {});
            }
        };

    }
})();
