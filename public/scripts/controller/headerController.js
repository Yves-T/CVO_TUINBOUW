(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('HeaderController', HeaderController);


    function HeaderController($auth, $state, $http, $rootScope, Data, $location) {

        var vm = this;

        vm.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };

    }
})();
