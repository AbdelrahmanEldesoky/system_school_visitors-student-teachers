<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class About extends Model
{

    protected $table = 'abouts';
    protected $guarded = [];

    protected $appends = ['image_path','image_patha'];
    public function getImagePathAttribute()
    {
        return asset('website/images/' . $this->image1);
    }

    public function getImagePathaAttribute()
    {
        return asset('website/images/' . $this->image2);
    }



}
