<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameUssageToCosmetic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plant_medicals', function (Blueprint $table) {
            $table->renameColumn('ussage','cosmetic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plant_medicals', function (Blueprint $table) {
            $table->renameColumn('cosmetic','ussage');
        });
    }
}
