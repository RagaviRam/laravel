<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',191);
            $table->string('lastname',191);
            $table->string('gender',191);
            $table->string('city',191);
            $table->integer('age');
            $table->string('state',191);
            $table->string('country',191);
            $table->integer('phoneNumber');
            $table->integer('pincode');
            $table->date('dateofbirth');
            $table->string('email',191);
            $table->string('hobbies');
            $table->string('file');
            $table->string('password',191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
