<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{

    protected $table = 'activitys';
    protected $guarded = [];


    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('website/images/' . $this->image);

    }

    

}
