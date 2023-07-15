<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class HomeWork extends Model
{

    protected $table = 'home_works';
    protected $guarded = [];

    public function material()
    {
        return $this->belongsTo(Material::class,'material_id');
    }  

}
