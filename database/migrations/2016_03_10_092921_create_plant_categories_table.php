<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('species', 100);
            $table->string('habitat', 100);
            $table->string('height', 100);
            $table->string('flower_color', 100);
            $table->string('bloomTime', 100);
            $table->string('flowers', 100);
            $table->string('leafColor', 100);
            $table->string('leaf', 100);
            $table->string('leafDetail', 100);
            $table->string('sunlight', 100);
            $table->string('humidity', 100);
            $table->string('ph', 100);
            $table->string('evergreen', 100);
            $table->string('planDensity', 100);
            $table->integer('plant_id')->unsigned()->index();
            $table->foreign('plant_id')->references('id')->on('plants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plant_category');
    }
}
