<?php

namespace App\Http\Controllers;

use App\Plant;
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
