(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('PlantListController', PlantListController);

    function PlantListController($state, Auth, Data) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        var vm = this;
        vm.sortKey = 'plant.id';
        vm.plants = [];

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

        vm.logout = function () {
            Auth.logout(function () {
                $state.go('auth', {});
            });
        };
    }

})();