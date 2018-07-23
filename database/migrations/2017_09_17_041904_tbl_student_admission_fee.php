<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblStudentAdmissionFee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_student_admission_fee', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('registration_id');
            $table->bigInteger('class_id');
            $table->string('student_name');
            $table->string('admission_fee');
            $table->string('monthly_fee');
            $table->string('annual_funds_others');
            $table->string('total_fee');
            $table->string('monthly_concession');
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
        Schema::dropIfExists('tbl_student_admission_fee');
    }
}
