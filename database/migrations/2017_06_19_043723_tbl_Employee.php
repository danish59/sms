<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_employee', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('campus_id');
            $table->string('emp_f_name');
            $table->string('emp_m_name')->default('null');
            $table->string('emp_l_name');
            $table->string('emp_cnic');
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('date_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('cast');
            $table->binary('emp_image');
            $table->string('emp_email')->unique();
            $table->bigInteger('emp_phone');
            $table->string('address');
            $table->integer('role');
            $table->string('degree_certificate');
            $table->string('cgpa_percentage');
            $table->string('university_college');
            $table->string('passing_year');
            $table->string('experience')->default('null');
            $table->string('duration')->default('null');
            $table->string('certificates_coureses1')->default('null');
            $table->string('certificates_coureses2')->default('null');
            $table->string('certificates_coureses3')->default('null');
            $table->string('skil1')->default('null');
            $table->string('skil2')->default('null');
            $table->string('skil3')->default('null');
            $table->boolean('user_account')->default(0);
            $table->bigInteger('section_id')->default(0);
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
        Schema::dropIfExists('tbl_employee');
    }
}
