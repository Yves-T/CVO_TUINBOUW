<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantMedicalContent extends Model
{
    public $timestamps = false;

    public function medical()
    {
        return $this->belongsTo(PlantMedical::class);
    }
}
