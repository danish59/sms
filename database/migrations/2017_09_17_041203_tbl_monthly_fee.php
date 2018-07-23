<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblMonthlyFee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_monthly_fee', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('registration_id');
            $table->bigInteger('roll_no');
            $table->bigInteger('section_id');
            $table->string('month');
            $table->string('year');
            $table->string('tution_fee');
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
        Schema::dropIfExists('tbl_monthly_fee');
    }
}
