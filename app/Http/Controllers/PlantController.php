<?php

namespace App\Http\Controllers;

use App\FlowerArrangements;
use App\FlowerRequirements;
use App\Plant;
use App\PlantCategory;
use App\PlantCultivars;
use App\PlantCultivarsExamples;
use App\PlantHarvest;
use App\PlantHistory;
use App\PlantInformation;
use App\PlantMaintenance;
use App\PlantMedical;
use App\PlantMedicalContent;
use App\PlantRecipe;
use App\PlantRecipeIngredients;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class PlantController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        $plants = Plant::all();
        // eager fetching, we need all data
        foreach ($plants as $plant) {
            $plant->plantInformation;
        }

        return response()->json($plants);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $plant = new Plant();
        $plant->save();

        // information
        $plantInformation = new PlantInformation();
        $plantInformation->title = $request->infoTitle;
        $plantInformation->title = $request->infoPlant;
        $plantInformation->family = $request->infoFamily;
        $plantInformation->genus = $request->infoGenus;
        $plantInformation->plant()->associate($plant);
        $plantInformation->save();

        // category
        $plantCategory = new PlantCategory();
        $plantCategory->species = $request->catTitle;
        $plantCategory->usage = $request->catGebruik;
        $plantCategory->habitat = $request->catHabitat;
        $plantCategory->height = $request->catHeight;
        $plantCategory->flower_color = $request->catFlowerColor;
        $plantCategory->bloomTime = $request->catBlloomTime;
        $plantCategory->flowers = $request->catFlowers;
        $plantCategory->leafColor = $request->catLeafColors;
        $plantCategory->leaf = $request->catLeafs;
        $plantCategory->leafDetail = $request->catLeafDetail;
        $plantCategory->sunlight = $request->catLeafShadow;
        $plantCategory->humidity = $request->catHumidity;
        $plantCategory->ph = $request->catPh;
        $plantCategory->evergreen = $request->catEvergreen;
        $plantCategory->planDensity = $request->catDensity;
        $plantCategory->plant()->associate($plant);
        $plantCategory->save();

        // cultivars
        $cultivars = new PlantCultivars();
        $cultivars->plantCultivarsInfo = $request->cultivarsInfo;
        $cultivars->plant()->associate($plant);
        $cultivars->save();

        $cultivarExamples = $request->cultivarExamples;
        foreach ($cultivarExamples as $example) {
            $cultivarsExample = new PlantCultivarsExamples();
            $cultivarsExample->example = $example;
            $cultivarsExample->cultivar()->associate($cultivars);
            $cultivarsExample->save();
        }

        // history
        $plantHistory = new PlantHistory();
        $plantHistory->plantHistory = $request->historyPlant;
        $plantHistory->plant()->associate($plant);
        $plantHistory->save();

        // maintenance
        $maintenance = new PlantMaintenance();
        $maintenance->maintenance = $request->maintenancePlant;
        $maintenance->plant()->associate($plant);
        $maintenance->save();

        // harvest
        $harvest = new PlantHarvest();
        $harvest->plantHarvest = $request->harvestPlant;
        $harvest->plant()->associate($plant);
        $harvest->save();

        // medicinal
        $medicinal = new PlantMedical();
        $medicinal->properties = $request->medicalProperties;
        $medicinal->usage = $request->medicalUsage;
        $medicinal->warnings = $request->medicalWarnings;
        $medicinal->cosmetic = $request->medicalCosmetic;
        $medicinal->plant()->associate($plant);
        $medicinal->save();

        $contents = $request->medicalContent;

        foreach ($contents as $content) {
            $medicalContent = new PlantMedicalContent();
            $medicalContent->content = $content;
            $medicalContent->medical()->associate($medicinal);
            $medicalContent->save();
        }

        // recipes
        $recipes = $request->recipes;
        foreach ($recipes as $recipe) {
            $plantRecipe = new PlantRecipe();
            $plantRecipe->name = $recipe['name'];
            $plantRecipe->steps = $recipe['steps'];
            $plantRecipe->plant()->associate($plant);
            $plantRecipe->save();

            // recipe ingredients
            $ingredients = $recipe['ingredients'];
            foreach ($ingredients as $ingredient) {
                $plantIngredient = new PlantRecipeIngredients();
                $plantIngredient->ingredientName = $ingredient;
                $plantIngredient->recipe()->associate($plantRecipe);
                $plantIngredient->save();
            }
        }

        // flower arrangements

        $arrangements = $request->projects;
        foreach ($arrangements as $arrangement) {
            $plantArrangement = new FlowerArrangements();
            $plantArrangement->title = $arrangement['name'];
            $plantArrangement->steps = $arrangement['steps'];
            $plantArrangement->plant()->associate($plant);
            $plantArrangement->save();

            // arrangement requirement
            $requirements = $arrangement['requirements'];
            foreach ($requirements as $requirement) {
                $flowerRequirement = new FlowerRequirements();
                $flowerRequirement->requirement = $requirement;
                $flowerRequirement->arrangement()->associate($plantArrangement);
                $flowerRequirement->save();
            }
        }

        DB::commit();

        return response()->json($plant->id);
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        $plant = Plant::findOrFail($id);
        $plant->plantInformation->delete();
        $plant->plantCategory->delete();
        $plant->plantHistory->delete();
        $plant->plantHarvest->delete();
        $cultivarsExamples = $plant->plantCultivars->examples;
        foreach ($cultivarsExamples as $cultivarsExample) {
            $cultivarsExample->delete();
        }
        $cultivars = $plant->plantCultivars->delete();
        $plant->plantCultivars->delete();
        $medicalContents = $plant->plantMedical->contents;
        foreach ($medicalContents as $medicalContent) {
            $medicalContent->delete();
        }
        $plant->plantMedical->delete();
        $recipes = $plant->plantRecipes;
        foreach ($recipes as $recipe) {
            $ingredients = $recipe->ingredients;
            foreach ($ingredients as $ingredient) {
                $ingredient->delete();
            }
            $recipe->delete();
        }

        $arangements = $plant->flowerArrangements;
        foreach ($arangements as $arrangement) {
            $requirements = $arrangement->requirements;
            foreach ($requirements as $req) {
                $req->delete();
            }
            $arrangement->delete();
        }

        $plant->plantMaintenance->delete();
        $plant->delete();

        DB::commit();

        return response()->json($id);
    }
}
