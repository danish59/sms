<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileGallery_M extends Model
{
    protected $table = 'tbl_profile_gallery';
    protected $fillable = [
        'id','campus_id','slider_image1','discription_slider1','slider_image2','discription_slider2','slider_image3',
    'discription_slider3','gallery_image1','title_gallery_image1','gallery_image2','title_gallery_image2',
    'gallery_image3','title_gallery_image3','gallery_image4','title_gallery_image4','gallery_image5',
    'title_gallery_image5','gallery_image6','title_gallery_image6','gallery_image7','title_gallery_image7',
    'gallery_image8','title_gallery_image8','availability'
    ];

    protected $hidden = [
        'remember_token',
    ];
}
