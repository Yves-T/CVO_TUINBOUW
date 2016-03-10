<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantMedicalContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_medical_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content', 100);
            $table->integer('plant_medical_id')->unsigned()->index();
            $table->foreign('plant_medical_id')->references('id')->on('plant_medicals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plant_medical_contents');
    }
}
