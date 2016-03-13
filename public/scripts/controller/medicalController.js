(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('MedicalController', MedicalController);

    function MedicalController($state, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        if ($scope.parrentController.formData.medicalContent) {
            vm.medicalContents = $scope.parrentController.formData.medicalContent;
        } else {
            vm.medicalContents = [];
        }

        vm.addContent = function () {
            vm.medicalContents.push(vm.medicalContent);
            $scope.parrentController.formData.medicalContent = vm.medicalContents;
            vm.medicalContent = "";
        };

        vm.deleteContent = function (index) {
            vm.medicalContents.splice(index, 1);
            $scope.parrentController.formData.medicalContent = vm.medicalContents;
        };

        vm.showContents = function () {
            return vm.medicalContents.length > 0;
        };

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantCultivars', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantHarvest', {});
            }
        };

    }
})();
