<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantRecipeIngredients extends Model
{
    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo(PlantRecipe::class, 'plant_recipe_id');
    }

}
