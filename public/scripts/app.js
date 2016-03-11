(function () {

    'use strict';

    angular
        .module('tuinbouwApp', ['ui.router', 'satellizer', 'angularUtils.directives.dirPagination'])
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
                            // console.log(response.headers('Authorization'));
                            // console.log(response.headers('Authorization').split(' '));
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
                .state('users', {
                    url: '/plantList',
                    templateUrl: '../views/plantListView.html',
                    controller: 'PlantListController as plantList'
                });
        });
})();
