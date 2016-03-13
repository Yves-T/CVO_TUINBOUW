angular
    .module('tuinbouwApp')
    .service('Data', ['$http', function ($http) {

        var getAuthenticatedUser = function (success, error) {
            $http.get('api/authenticate/user').success(success).error(error);
        };

        var refreshToken = function (success, error) {
            $http.get('api/authenticate/refresh').success(success).error(error);
        };

        var getPlants = function (success, error) {
            $http.get('http://tuinbouw.app/api/plant').success(success).error(error);
        };

        var deletePlant = function (plantId, success, error) {
            $http.delete('http://tuinbouw.app/api/plant/' + plantId).success(success).error(error);
        };

        return {
            getAuthenticatedUser: getAuthenticatedUser,
            getPlants: getPlants,
            deletePlant: deletePlant,
            refreshToken: refreshToken
        };

    }]);
