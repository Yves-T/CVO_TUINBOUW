(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('FormController', FormController);


    function FormController(Auth, $state, $rootScope, Data, $http, $stateParams) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        var vm = this;

        vm.loginError = false;

        vm.loginErrorText;
        $rootScope.currentUser = Auth.currentUserName();

        vm.formData = {};
        vm.isUpdating = $stateParams.plantId;
        if (vm.isUpdating) {
            // update plant
            Data.getPlantById($stateParams.plantId, function (plant) {
                remapFormData(plant);
            }, function (error) {
                console.log(error);
            });
        }

        vm.processForm = function () {
            if (vm.isUpdating) {
                handleUpdatePlant();
            } else {
                handleCreatePlant();
            }
        };

        function handleUpdatePlant() {
            Data.updatePlant($stateParams.plantId, vm.formData, function (result) {
                console.log(result);
            }, function (error) {
                console.log(error);
            });
        }

        function handleCreatePlant() {
            Data.createPlant(vm.formData, function (result) {

                $state.go('qrCode', {"plantId": result});
            }, function (error) {
                console.log(error);
            });
        }

        vm.isStateActive = function(someState) {
            return ($state.current.name.localeCompare(someState) == 0) ? 'active' : '';
        };

        function remapFormData(plant) {
            // plant information
            vm.formData.infoTitle = plant.plant_information.title;
            vm.formData.infoPlant = plant.plant_information.info;
            vm.formData.infoFamily = plant.plant_information.family;
            vm.formData.infoGenus = plant.plant_information.genus;

            // category
            vm.formData.catTitle = plant.plant_category.species;
            vm.formData.catGebruik = plant.plant_category.usage;
            vm.formData.catHabitat = plant.plant_category.habitat;
            vm.formData.catHeight = plant.plant_category.height;
            vm.formData.catFlowerColor = plant.plant_category.flower_color;
            vm.formData.catBlloomTime = plant.plant_category.bloomTime;
            vm.formData.catFlowers = plant.plant_category.flowers;
            vm.formData.catLeafColors = plant.plant_category.leafColor;
            vm.formData.catLeafs = plant.plant_category.leaf;
            vm.formData.catLeafDetail = plant.plant_category.leafDetail;
            vm.formData.catLeafShadow = plant.plant_category.sunlight;
            vm.formData.catHumidity = plant.plant_category.humidity;
            vm.formData.catPh = plant.plant_category.ph;
            vm.formData.catEvergreen = plant.plant_category.evergreen;
            vm.formData.catDensity = plant.plant_category.planDensity;

            // cultivars
            vm.formData.cultivarsInfo = plant.plant_cultivars.plantCultivarsInfo;
            vm.formData.cultivarExamples = plant.plant_cultivars.examples;
            vm.formData.cultivarExamples = plant.plant_cultivars.examples.map(function (example) {
                return example.example;
            });

            // history
            vm.formData.historyPlant = plant.plant_history.plantHistory;

            // maintenance
            vm.formData.maintenancePlant = plant.plant_maintenance.maintenance;

            // harvest
            vm.formData.harvestPlant = plant.plant_harvest.plantHarvest;

            // medicinal
            vm.formData.medicalProperties = plant.plant_medical.properties;
            vm.formData.medicalUsage = plant.plant_medical.usage;
            vm.formData.medicalWarnings = plant.plant_medical.warnings;
            vm.formData.medicalCosmetic = plant.plant_medical.cosmetic;
            vm.formData.medicalContent = plant.plant_medical.contents.map(function (content) {
                return content.content;
            });

            // recipes
            vm.formData.recipes = plant.plant_recipes.map(function (recipe) {
                var ingredients = recipe.ingredients.map(function (ingredient) {
                    return ingredient.ingredientName;
                });
                return {
                    name: recipe.name,
                    steps: recipe.steps,
                    ingredients: ingredients
                }
            });

            // flower arrangements
            vm.formData.projects = plant.flower_arrangements.map(function (project) {
                var requirements = project.requirements.map(function (requirement) {
                    return requirement.requirement;
                });
                return {
                    name: project.title,
                    steps: project.steps,
                    requirements: requirements
                };
            });
        }
    }
})();
