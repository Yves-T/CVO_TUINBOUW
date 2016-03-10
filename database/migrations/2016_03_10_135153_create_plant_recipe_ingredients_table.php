<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_recipe_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ingredientName', 100);
            $table->integer('plant_recipe_id')->unsigned()->index();
            $table->foreign('plant_recipe_id')->references('id')->on('plant_recipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plant_recipe_ingredients');
    }
}
