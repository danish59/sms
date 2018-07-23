<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_registration', function (Blueprint $table) {
            $table->increments('registration_id');
            $table->bigInteger('campus_id');
            $table->string('std_reg_num');
            $table->bigInteger('class_id');
            $table->string('std_f_name');
            $table->string('std_m_name')->default('null');
            $table->string('std_l_name');
            $table->string('std_cnic');
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('date_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('cast');
            $table->binary('std_image');
            $table->string('std_email')->unique();
            $table->string('std_phone');
            $table->string('address');
            $table->string('profession');
            $table->string('class');
            $table->string('group');
            $table->string('hobbies');
            $table->string('previous_school')->default('null');
            $table->string('brother_sister1')->default('null');
            $table->string('brother_sister2')->default('null');
            $table->string('brother_sister3')->default('null');
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
        Schema::dropIfExists('tbl_registration');
    }
}
