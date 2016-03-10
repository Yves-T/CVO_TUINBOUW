<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantMedical extends Model
{
    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    public function contents()
    {
        return $this->hasMany(PlantMedicalContent::class, "plant_medical_id");
    }
}
