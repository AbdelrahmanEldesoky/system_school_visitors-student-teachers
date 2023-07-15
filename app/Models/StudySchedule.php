<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StudySchedule extends Model
{

    protected $table = 'study_schedules';
    protected $guarded = [];

    public function material()
    {
        return $this->belongsTo(Material::class,'material_id');
    }  
    public function day()
    {
        return $this->belongsTo(Day::class,'day_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }
   
    public function period()
    {
        return $this->belongsTo(Period::class,'period_id');
    }

}
