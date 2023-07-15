<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{

    protected $table = 'materials';
    protected $guarded = [];

    public function school()
    {
        return $this->belongsTo(SchoolYear::class,'year_id');
    }//end fo school
    public function Schedule(): HasMany
    {
        return $this->hasMany(StudySchedule::class,'id');
    }

    public function homework(): HasMany
    {
        return $this->hasMany(HomeWork::class,'id');
    }
    public function getTerm()
    {
        if($this->term == 1){
          return  'الفصل الدراسي الاول';
        }else if($this->term == 2){
           return  'الفصل الدراسي الثاني';
        }else{
            return   'الفصل الدراسي الثالث';
        }
        
    }
    public function degry(): HasMany
    {
        return $this->hasMany(Degry::class,'id');
    }

}
