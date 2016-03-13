(function () {

    'use strict';

    angular
        .module('tuinbouwApp')
        .controller('RecipesController', RecipesController);

    function RecipesController($state, $scope) {

        var vm = this;

        vm.loginError = false;
        vm.loginErrorText;

        if ($scope.parrentController.formData.recipes) {
            vm.recipes = $scope.parrentController.formData.recipes;
        } else {
            vm.recipes = [];
        }

        vm.navButtonsDisabled = vm.recipes.length === 0;

        vm.editedRecipe = null;

        vm.recipeFormVissible = vm.recipes.length === 0 || false;
        vm.tableVissible = vm.recipes.length;

        vm.showRecipeForm = function () {
            return vm.recipeFormVissible;
        };

        vm.showRecipeTable = function () {
            return vm.tableVissible;
        };

        vm.addRecipe = function (event) {
            event.preventDefault();
            vm.recipeFormVissible = true;
            vm.tableVissible = false;
        };

        vm.editRecipe = function (someRecipe, event) {
            event.preventDefault();
            var foundRecipe = searchRecipe(someRecipe);
            vm.tableVissible = false;

            if (foundRecipe) {
                vm.recipeFormVissible = true;
                vm.recipeName = foundRecipe.name;
                vm.recipeSteps = foundRecipe.steps;
                vm.editedRecipe = foundRecipe;
                vm.ingredients = foundRecipe.ingredients;
                vm.ingredientsVissible = true;
            }
        };

        function searchRecipe(someRecipe) {
            return _.find(vm.recipes, function (recipe) {
                return recipe.name.localeCompare(someRecipe.name) === 0 &&
                    recipe.steps.localeCompare(someRecipe.steps) === 0;
            });
        }

        vm.deleteRecipe = function (index, event) {
            event.preventDefault();
            vm.recipes.splice(index, 1);
            vm.navButtonsDisabled = vm.recipes.length === 0;
            $scope.parrentController.formData.recipes = vm.recipes;
            vm.tableVissible = vm.recipes.length;
        };

        vm.proccessRecipe = function (event) {
            event.preventDefault();
            var formRecipe = {};
            formRecipe.name = vm.recipeName;
            formRecipe.steps = vm.recipeSteps;
            formRecipe.ingredients = vm.ingredients;

            var foundRecipe = searchRecipe(formRecipe);

            if (foundRecipe) {
                handleEditRecipe(formRecipe);
            } else {
                handleNewRecipe(formRecipe);
            }

            vm.recipeName = "";
            vm.recipeSteps = "";
            vm.recipeFormVissible = false;
            vm.navButtonsDisabled = vm.recipes.length === 0;
            $scope.parrentController.formData.recipes = vm.recipes;
        };

        function handleEditRecipe(recipe) {
            vm.editedRecipe.name = recipe.name;
            vm.editedRecipe.steps = recipe.steps;
            vm.editedRecipe.ingredients = recipe.ingredients;
            vm.editedRecipe = null;
            vm.tableVissible = vm.recipes.length;
        }

        function handleNewRecipe(recipe) {
            vm.recipes.push(recipe);
            vm.tableVissible = vm.recipes.length;
        }

        vm.cancelRecipeForm = function (event) {
            event.preventDefault();
            vm.recipeFormVissible = false;
            vm.editedRecipe = null;
            vm.tableVissible = vm.recipes.length;
        };

        // ingredients

        vm.ingredients = [];
        vm.ingredientsVissible = false;

        vm.showIngredients = function () {
            return vm.ingredientsVissible;
        };

        vm.addIngredient = function ($event) {
            event.preventDefault();
            vm.ingredients.push(vm.recipeIngredient);
            vm.ingredientsVissible = vm.ingredients.length;
        };

        vm.deleteIngredient = function (index, event) {
            event.preventDefault();
            vm.ingredients.splice(index, 1);
        };

        vm.nextPage = function () {
            if ($scope.plantForm.$valid && !vm.navButtonsDisabled) {
                $state.go('form.plantCultivars', {});
            }
        };

        vm.prevPage = function () {
            if ($scope.plantForm.$valid && !vm.navButtonsDisabled) {
                $state.go('form.plantMedical', {});
            }
        };
    }
})();
