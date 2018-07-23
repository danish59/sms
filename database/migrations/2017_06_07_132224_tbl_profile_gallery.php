<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProfileGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('campus_id');
            $table->binary('slider_image1');
            $table->string('discription_slider1');
            $table->binary('slider_image2');
            $table->string('discription_slider2');
            $table->binary('slider_image3');
            $table->string('discription_slider3');
            $table->binary('gallery_image1');
            $table->string('title_gallery_image1');
            $table->binary('gallery_image2');
            $table->string('title_gallery_image2');
            $table->binary('gallery_image3');
            $table->string('title_gallery_image3');
            $table->binary('gallery_image4');
            $table->string('title_gallery_image4');
            $table->binary('gallery_image5');
            $table->string('title_gallery_image5');
            $table->binary('gallery_image6');
            $table->string('title_gallery_image6');
            $table->binary('gallery_image7');
            $table->string('title_gallery_image7');
            $table->binary('gallery_image8');
            $table->string('title_gallery_image8');
            $table->boolean('availability');
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
        Schema::dropIfExists('tbl_profile_gallery');
    }
}
