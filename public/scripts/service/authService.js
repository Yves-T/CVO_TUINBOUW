angular
    .module('tuinbouwApp')
    .service('Auth', ['$auth', '$window', '$rootScope', function ($auth, $window, $rootScope) {

        var isAuthenticated = function (success, error) {
            return $auth.isAuthenticated();
        };

        var clearAuthenticated = function () {
            $window.localStorage.removeItem('user');
        };

        var logOut = function (success) {
            $auth.logout().then((function () {
                clearAuthenticated();
                
                $rootScope.authenticated = false;
                
                $rootScope.currentUser = null;

                success();
            }));
        };

        var currentUserName = function () {
            var user = JSON.parse(localStorage.getItem('user'));
            return user.name;
        };

        return {
            isAuthenticated: isAuthenticated,
            clearAuthenticated: clearAuthenticated,
            logout: logOut,
            currentUserName: currentUserName
        };

    }]);
