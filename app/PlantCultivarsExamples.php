<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCultivarsExamples extends Model
{

    public $timestamps = false;

    public function cultivar()
    {
        return $this->belongsTo(PlantCultivars::class,"plant_cultivars_id");
    }
}
