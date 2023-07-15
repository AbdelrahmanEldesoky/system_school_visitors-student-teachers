<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{

    protected $table = 'classes';
    protected $guarded = [];




    public function school()
    {
        return $this->belongsTo(SchoolYear::class,'year_id');
    }//end fo school


    public function Schedule(): HasMany
    {
        return $this->hasMany(StudySchedule::class,'id');
    }

}
