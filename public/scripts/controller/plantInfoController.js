(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('PlantInfoController', PlantInfoController);

    function PlantInfoController($state, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantCategory', {});
            }
        };

    }
})();
