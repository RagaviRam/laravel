<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MyProgram extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_models', function (Blueprint $table) {
            $table->string ("gender",191);
            $table->string("area of interest",191);
        });
    
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_models', function (Blueprint $table) {
            $table->dropcolumn("area of interest");
        });
    }
}
