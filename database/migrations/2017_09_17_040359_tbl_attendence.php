<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAttendence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_attendence', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('roll_no');
            $table->bigInteger('section_id');
            $table->string('std_name');
            $table->string('father_name');
            $table->boolean('status');
            $table->string('day_name');
            $table->string('date');
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
        Schema::dropIfExists('tbl_attendence');
    }
}
