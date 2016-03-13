(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('CultivarsController', CultivarsController);

    function CultivarsController($auth, $state, $http, $rootScope, Data, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        if ($scope.parrentController.formData.cultivarExamples) {
            vm.examples = $scope.parrentController.formData.cultivarExamples;
        } else {
            vm.examples = [];
        }

        vm.addExample = function ($event) {
            $event.preventDefault();
            vm.examples.push(vm.cultivarsExample);
            $scope.parrentController.formData.cultivarExamples = vm.examples;
            vm.cultivarsExample = "";
        };

        vm.deleteExample = function (index, $event) {
            $event.preventDefault();
            vm.examples.splice(index, 1);
            $scope.parrentController.formData.cultivarExamples = vm.examples;
        };

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantHistory', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantCategory', {});
            }
        };
    }
})();
