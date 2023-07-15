<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentStudent extends Model
{

    protected $table = 'parent_students';
    protected $guarded = [];

    public function students()
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function pertants()
    {
        return $this->belongsTo(Parent::class,'parent_id');
    }


}
