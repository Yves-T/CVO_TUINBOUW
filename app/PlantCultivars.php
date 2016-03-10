<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCultivars extends Model
{
    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    public function examples()
    {
        return $this->hasMany(PlantCultivarsExamples::class, "plant_cultivars_id");
    }
}
