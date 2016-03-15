<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;

use App\Http\Requests;

class FreePlantController extends Controller
{
    public function show($id)
    {
        $plant = Plant::findOrFail($id);

        $plant->plantInformation;

        return $plant;
    }
}
