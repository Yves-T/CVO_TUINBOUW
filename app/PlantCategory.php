<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCategory extends Model
{
    protected $table = 'plant_category';

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
