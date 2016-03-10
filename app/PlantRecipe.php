<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantRecipe extends Model
{
    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    public function ingredients()
    {
        return $this->hasMany(PlantRecipeIngredients::class, "plant_recipe_id");
    }
}
