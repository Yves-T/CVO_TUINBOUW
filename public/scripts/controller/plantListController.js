(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('PlantListController', PlantListController);

    function PlantListController($state, Auth, Data, $rootScope, $stateParams) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        var vm = this;
        vm.sortKey = 'plant.id';
        vm.plants = [];
        vm.message = $stateParams.message;

        $rootScope.currentUser = Auth.currentUserName();

        Data.getPlants(function (plants) {
            vm.plants = plants;
        }, function (error) {
            console.log(error);
        });

        vm.sort = function (keyname) {
            vm.sortKey = keyname;
            vm.reverse = !vm.reverse;
        };

        vm.users;
        vm.error;

        vm.showTable = function () {
            return vm.plants.length !== 0;
        };

        vm.showQrCode = function (plantId) {
            $state.go('qrCode', {"plantId": plantId});
        };

        vm.addPlant = function () {
            $state.go('form.plantInfo', {});
        };

        vm.updatePlant = function (plantId) {
            $state.go('form.plantInfo', {"plantId": plantId});
        };

        vm.deletePlant = function (plantId) {
            Data.deletePlant(plantId, function (plantId) {
                console.log(plantId);
                var plantIdAsInt = parseInt(plantId);
                _.remove(vm.plants, function (currentPlant) {
                    return currentPlant.id === parseInt(plantIdAsInt);
                });
            }, function (error) {
                console.log(error);
            });
        }

    }

})();
