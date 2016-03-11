angular
    .module('tuinbouwApp')
    .service('Data', ['$http', function ($http) {

        var getAuthenticatedUser = function (success, error) {
            $http.get('api/authenticate/user').success(success).error(error);
        };

        var getPlants = function (success, error) {
            $http.get('http://tuinbouw.app/api/plant').success(success).error(error);
        };

        return {
            getAuthenticatedUser: getAuthenticatedUser,
            getPlants: getPlants
        };

    }]);
