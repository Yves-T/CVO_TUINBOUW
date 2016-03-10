angular
    .module('tuinbouwApp')
    .service('Data', ['$http', function ($http) {

        var getAuthenticatedUser = function (success, error) {
            $http.get('api/authenticate/user').success(success).error(error);
        };

        return {
            getAuthenticatedUser: getAuthenticatedUser
        };

    }]);
