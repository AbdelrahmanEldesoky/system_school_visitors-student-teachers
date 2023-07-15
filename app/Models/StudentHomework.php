<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StudentHomework extends Model
{

    protected $table = 'student_homework';
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }  
}
