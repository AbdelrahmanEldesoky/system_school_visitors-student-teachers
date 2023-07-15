<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Period extends Model
{

    protected $table = 'periods';
    protected $guarded = [];

    public function Schedule(): HasMany
    {
        return $this->hasMany(StudySchedule::class,'id');
    }
}
