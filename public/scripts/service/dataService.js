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

        var getPlantById = function (id, success, error) {
            $http.get('http://tuinbouw.app/api/plant/' + id).success(success).error(error);
        };

        var updatePlant = function (id, formData, success, error) {
            $http.put('http://tuinbouw.app/api/plant/' + id, formData).success(success).error(error);
        };

        var deletePlant = function (plantId, success, error) {
            $http.delete('http://tuinbouw.app/api/plant/' + plantId).success(success).error(error);
        };

        var createPlant = function (formData, success, error) {
            $http.post('http://tuinbouw.app/api/plant', formData).success(success).error(error);
        };

        return {
            getAuthenticatedUser: getAuthenticatedUser,
            getPlants: getPlants,
            getPlantById: getPlantById,
            updatePlant: updatePlant,
            deletePlant: deletePlant,
            createPlant: createPlant,
            refreshToken: refreshToken
        };

    }]);
