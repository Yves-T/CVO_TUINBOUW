<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;

use App\Http\Requests;

class PlantController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.refresh');
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
}
