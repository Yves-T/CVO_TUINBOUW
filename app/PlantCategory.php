<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCategory extends Model
{
    protected $table = 'plant_category';

    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
