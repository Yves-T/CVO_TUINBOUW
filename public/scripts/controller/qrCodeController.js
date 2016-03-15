(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('QrCodeController', QrCodeController);

    function QrCodeController($state, Auth, Data, $rootScope, $stateParams) {

        // if the user is not logged in, throw them back to the login page
        if (!Auth.isAuthenticated()) {
            Auth.clearAuthenticated();
            $state.go('auth', {});
        }

        $rootScope.currentUser = Auth.currentUserName();

        // set up init variables
        var vm = this;
        vm.code = $stateParams.plantId;
        vm.bar = 'http://37.139.23.228/freePlant/' + vm.code;
        vm.qrVersion = 4;
        vm.errorCorrectionLevel = 'M';
        vm.qrSize = 274;

        vm.goToPlantList = function () {
            $state.go('plantList');
        };

        vm.downloadPdf = function () {
            var canvas = document.getElementsByTagName("canvas")[0];

            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF();

            pdf.addImage(imgData, 'JPEG', 0, 0);
            pdf.save("download.pdf");
        }
    }

})();
