<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Degry extends Model
{

    protected $table = 'degrys';
    protected $guarded = [];

    public function material()
    {
        return $this->belongsTo(Material::class,'material_id');
    }  

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
   

}
