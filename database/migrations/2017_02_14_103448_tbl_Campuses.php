<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCampuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_campuses', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('school_id');
            $table->string('campus_name');
            $table->bigInteger('principle_id')->default(0);
            $table->string('address');
            $table->bigInteger('phone_office')->default(0);
            $table->string('email')->unique();
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
        Schema::dropIfExists('tbl_campuses');
    }
}
