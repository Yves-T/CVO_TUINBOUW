<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameNameToSteps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flower_arrangements', function (Blueprint $table) {
            $table->renameColumn('name','steps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flower_arrangements', function (Blueprint $table) {
            $table->renameColumn('steps','name');
        });
    }
}
