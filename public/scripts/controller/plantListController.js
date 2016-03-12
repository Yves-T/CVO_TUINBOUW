(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('PlantListController', PlantListController);

    function PlantListController($state, Auth, Data, $rootScope) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        var vm = this;
        vm.sortKey = 'plant.id';
        vm.plants = [];

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

        vm.showQrCode = function (plantId) {
            $state.go('qrCode', {"plantId": plantId});
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
