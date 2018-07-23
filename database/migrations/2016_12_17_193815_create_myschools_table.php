<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myschools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_no');
            $table->string('school_name');
            $table->string('school_abrevation');
            $table->string('reg_school_name');
            $table->string('affiliation');
            $table->bigInteger('total_students');
            $table->bigInteger('total_teachers');
            $table->string('address');
            $table->bigInteger('phone_office');
            $table->bigInteger('phone_home');
            $table->string('email')->unique();
            $table->string('owner_name',60);
            $table->string('owner_father_name',60);
            $table->string('owner_gender');
            $table->bigInteger('owner_cnic');
            $table->bigInteger('owner_cell');
            $table->string('principle_name',60);
            $table->string('principle_father_name',60);
            $table->string('principle_gender');
            $table->bigInteger('principle_cnic');
            $table->bigInteger('principle_cell');
            $table->string('school_level');
            $table->string('level_education');
            $table->string('location');
            $table->string('building_status');
            $table->string('director_message');
            $table->boolean('availability');
            $table->binary('image');
            $table->string('agreement');
            $table->rememberToken();
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
        Schema::dropIfExists('myschools');
    }
}
