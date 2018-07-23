<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblManageStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_manage_students', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('registration_id');
            $table->bigInteger('roll_no');
            $table->bigInteger('section_id');
            $table->string('std_f_name');
            $table->string('std_m_name')->default('null');
            $table->string('std_l_name');
            $table->string('father_name');
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
        Schema::dropIfExists('tbl_manage_students');
    }
}
