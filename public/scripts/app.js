(function () {

    'use strict';

    angular
        .module('tuinbouwApp', [
            'ui.router',
            'satellizer',
            'angularUtils.directives.dirPagination',
            'monospaced.qrcode',
            'angular-loading-bar',
            'ngAnimate',
            'textAngular'
        ])
        .config(function ($stateProvider, $urlRouterProvider, $authProvider, $httpProvider, $provide) {

            function redirectWhenLoggedOut($q, $injector) {

                return {

                    responseError: function (rejection) {

                        var $state = $injector.get('$state');
                        
                        var rejectionReasons = ['token_not_provided', 'token_expired', 'token_absent', 'token_invalid'];
                        
                        angular.forEach(rejectionReasons, function (value, key) {

                            if (rejection.data.error === value) {
                                
                                localStorage.removeItem('user');
                                
                                $state.go('auth');
                            }
                        });

                        return $q.reject(rejection);
                    }
                }
            }

            function persistNewToken($q, $injector) {
                return {
                    response: function (response) {
                        var auth = $injector.get('$auth');
                        if (response.headers('Authorization')) {
                            var token = response.headers('Authorization').split(' ')[1];
                            auth.setToken(token);
                        }

                        return response;
                    }
                }
            }

            $provide.factory('redirectWhenLoggedOut', redirectWhenLoggedOut);
            $provide.factory('persistNewToken', persistNewToken);

            $httpProvider.interceptors.push('redirectWhenLoggedOut');
            $httpProvider.interceptors.push('persistNewToken');

            $authProvider.loginUrl = '/api/authenticate';
            
            $urlRouterProvider.otherwise('/auth');

            $stateProvider
                .state('auth', {
                    url: '/auth',
                    templateUrl: '../views/authView.html',
                    controller: 'AuthController as auth'
                })
                .state('plantList', {
                    url: '/plantList',
                    templateUrl: '../views/plantListView.html',
                    controller: 'PlantListController as plantList'
                })
                .state('qrCode', {
                    url: '/qrCode',
                    templateUrl: '../views/qrCodeView.html',
                    controller: 'QrCodeController as qr',
                    params: {plantId: null}
                })
                .state('form', {
                    url: '/form',
                    templateUrl: '../views/form.html',
                    controller: 'FormController as vm',
                    controllerAs: 'parrentController'
                })
                .state('form.plantInfo', {
                    url: '/plantInfo',
                    templateUrl: '../views/form_plantInfo.html'
                })
                .state('form.plantCategory', {
                    url: '/plantCategory',
                    templateUrl: '../views/form_plantCategory.html'
                })
                .state('form.plantCultivars', {
                    url: '/plantCultivars',
                    templateUrl: '../views/form_plantCultivars.html',
                    controller: 'CultivarsController as cv'
                });

        })
        .run(function ($rootScope, $state, $auth, $http) {


            $rootScope.$on('$stateChangeStart', function (event, toState) {
                var user = JSON.parse(localStorage.getItem('user'));

                if (user) {

                    $rootScope.authenticated = true;

                    $rootScope.currentUser = user;

                    if (toState.name === "auth") {

                        event.preventDefault();

                        $state.go('plantList');
                    }
                }

            });
        });
})();
