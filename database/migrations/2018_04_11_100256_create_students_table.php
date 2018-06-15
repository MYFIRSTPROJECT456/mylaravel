<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('stuid');
            $table->string('stuname');
            $table->string('email');
            $table->string('std');
            $table->bigInteger('phoneno');
            $table->integer('age');
            $table->integer('state');
            $table->integer('city');
            $table->string('address');
            $table->integer('pincode');
            $table->string('image');
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
        Schema::drop('students');
    }
}
