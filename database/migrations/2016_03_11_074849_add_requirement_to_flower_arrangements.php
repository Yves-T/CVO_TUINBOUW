<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRequirementToFlowerArrangements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flower_requirements', function (Blueprint $table) {
            $table->string('requirement', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flower_requirements', function (Blueprint $table) {
            $table->dropColumn('requirement');
        });
    }
}
