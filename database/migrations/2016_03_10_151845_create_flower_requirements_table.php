<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowerRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('flower_arrangements_id')->unsigned()->index();
            $table->foreign('flower_arrangements_id')->references('id')->on('flower_arrangements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flower_requirements');
    }
}
