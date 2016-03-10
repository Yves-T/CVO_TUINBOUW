<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function plantInformation()
    {
        return $this->hasOne(PlantInformation::class);
    }

    public function plantCategory()
    {
        return $this->hasOne(PlantCategory::class);
    }

    public function plantMaintenance()
    {
        return $this->hasOne(PlantMaintenance::class);
    }

    public function plantHistory()
    {
        return $this->hasOne(PlantHistory::class);
    }

    public function plantHarvest()
    {
        return $this->hasOne(PlantHarvest::class);
    }

    public function plantCultivars()
    {
        return $this->hasOne(PlantCultivars::class);
    }

    public function plantMedical()
    {
        return $this->hasOne(PlantMedical::class);
    }

    public function plantRecipes()
    {
        return $this->hasMany(PlantRecipe::class);
    }
}
