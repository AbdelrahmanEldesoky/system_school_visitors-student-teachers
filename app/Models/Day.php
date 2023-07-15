<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{

    protected $table = 'days';
    protected $guarded = [];


    public function Schedule(): HasMany
    {
        return $this->hasMany(StudySchedule::class,'id');
    }

}
