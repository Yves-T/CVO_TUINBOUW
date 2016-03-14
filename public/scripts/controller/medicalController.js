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

        vm.addContent = function ($event) {
            $event.preventDefault();
            vm.medicalContents.push(vm.medicalContent);
            $scope.parrentController.formData.medicalContent = vm.medicalContents;
            vm.medicalContent = "";
        };

        vm.deleteContent = function (index, $event) {
            $event.preventDefault();
            vm.medicalContents.splice(index, 1);
            $scope.parrentController.formData.medicalContent = vm.medicalContents;
        };

        vm.showContents = function () {
            return vm.medicalContents.length > 0;
        };

        vm.disableContentBtn = true;

        $scope.$watch('pmc.medicalContent', function () {
            if (vm.medicalContent) {
                vm.disableContentBtn = vm.medicalContent.length === 0;
            } else {
                vm.disableContentBtn = true;
            }
        }, true);

        vm.nextPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantRecipes', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid) {
                $state.go('form.plantHarvest', {});
            }
        };

    }
})();
