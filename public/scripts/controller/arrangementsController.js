(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('ArrangementsController', ArrangementsController);

    function ArrangementsController($state, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        if ($scope.parrentController.formData.projects) {
            vm.projects = $scope.parrentController.formData.projects;
        } else {
            vm.projects = [];
        }

        vm.navButtonsDisabled = vm.projects.length === 0;

        vm.editedProject = null;

        vm.projectFormVissible = vm.projects.length === 0 || false;
        vm.tableVissible = vm.projects.length;

        vm.showProjectForm = function () {
            return vm.projectFormVissible;
        };

        vm.showProjectTable = function () {
            return vm.tableVissible;
        };

        vm.addProject = function (event) {
            event.preventDefault();
            vm.projectFormVissible = true;
            vm.tableVissible = false;
        };

        vm.editProject = function (someProject, event) {
            event.preventDefault();
            var foundProject = searchProject(someProject);
            vm.tableVissible = false;

            if (foundProject) {
                vm.projectFormVissible = true;
                vm.projectName = foundProject.name;
                vm.projectSteps = foundProject.steps;
                vm.editedProject = foundProject;
                vm.requirements = foundProject.requirements;
                vm.requirementsVissible = true;
            }
        };

        function searchProject(someProject) {
            return _.find(vm.projects, function (project) {
                return project.name.localeCompare(someProject.name) === 0 &&
                    project.steps.localeCompare(someProject.steps) === 0;
            });
        }

        vm.deleteProject = function (index, event) {
            event.preventDefault();
            vm.projects.splice(index, 1);
            vm.navButtonsDisabled = vm.projects.length === 0;
            $scope.parrentController.formData.projects = vm.projects;
            vm.tableVissible = vm.projects.length;
        };

        vm.proccessProject = function (event) {
            event.preventDefault();
            var formProject = {};
            formProject.name = vm.projectName;
            formProject.steps = vm.projectSteps;
            formProject.requirements = vm.requirements;

            if (vm.editedProject) {
                handleEditProject(formProject);
            } else {
                handleNewProject(formProject);
            }

            vm.projectName = "";
            vm.projectSteps = "";
            vm.projectFormVissible = false;
            vm.navButtonsDisabled = vm.projects.length === 0;
            $scope.parrentController.formData.projects = vm.projects;
        };

        function handleEditProject(project) {
            vm.editedProject.name = project.name;
            vm.editedProject.steps = project.steps;
            vm.editedProject.ingredients = project.requirements;
            vm.editedProject = null;
            vm.tableVissible = vm.projects.length;
        }

        function handleNewProject(project) {
            vm.projects.push(project);
            vm.tableVissible = vm.projects.length;
        }

        vm.cancelProjectForm = function (event) {
            event.preventDefault();
            vm.projectFormVissible = false;
            vm.editedProject = null;
            vm.tableVissible = vm.projects.length;
        };

        // requirements

        vm.requirements = [];
        vm.requirementsVissible = false;

        vm.showRequirements = function () {
            return vm.requirementsVissible;
        };

        vm.addRequirement = function ($event) {
            event.preventDefault();
            vm.requirements.push(vm.projectRequirement);
            vm.requirementsVissible = vm.requirements.length;
            vm.projectRequirement = "";
        };

        vm.deleteRequirement = function (index, event) {
            event.preventDefault();
            vm.requirements.splice(index, 1);
        };

        vm.didableRequirementBtn = true;

        $scope.$watch('afc.projectRequirement', function () {
            if (vm.projectRequirement) {
                vm.didableRequirementBtn = vm.projectRequirement.length === 0;
            } else {
                vm.didableRequirementBtn = true;
            }
        }, true);

        vm.nextPage = function () {
            if ($scope.plantForm.$valid && !vm.navButtonsDisabled) {
                $state.go('form.plantCultivars', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid && !vm.navButtonsDisabled) {
                $state.go('form.plantRecipes', {});
            }
        };
    }
})();
