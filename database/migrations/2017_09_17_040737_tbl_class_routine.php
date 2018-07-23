<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblClassRoutine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_class_routine', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section_id');
            $table->string('day');
            $table->bigInteger('teacher_id');
            $table->bigInteger('subject_id');
            $table->string('time');
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
        Schema::dropIfExists('tbl_class_routine');
    }
}
