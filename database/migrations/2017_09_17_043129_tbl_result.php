<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_result', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('roll_no');
            $table->bigInteger('section_id');
            $table->bigInteger('subject_id');
            $table->string('std_name');
            $table->string('father_name');
            $table->string('obtained_marks');
            $table->string('total_marks');
            $table->string('grade');
            $table->string('exam_type');
            $table->string('session');
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
        Schema::dropIfExists('tbl_result');
    }
}
