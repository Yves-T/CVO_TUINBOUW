(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('CultivarsController', CultivarsController);

    function CultivarsController($auth, $state, $http, $rootScope, Data, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        vm.examples = [];

        vm.addExample = function () {
            vm.examples.push(vm.cultivarsExample);
            $scope.parrentController.formData.cultivarExamples = vm.examples;
            vm.cultivarsExample = "";
        };

        vm.deleteExample = function (index) {
            vm.examples.splice(index, 1);
            $scope.parrentController.formData.cultivarExamples = vm.examples;
        };

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantInfo', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantCategory', {});
            }
        };
    }
})();
