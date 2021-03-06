<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantHarvest extends Model
{
    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
