<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantCultivarsExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_cultivars_examples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('example', 200);
            $table->integer('plant_cultivars_id')->unsigned()->index();
            $table->foreign('plant_cultivars_id')->references('id')->on('plant_cultivars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plant_cultivars_examples');
    }
}
