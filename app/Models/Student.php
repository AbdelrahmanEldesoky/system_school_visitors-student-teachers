<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Laratrust\Traits\LaratrustUserTrait;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'students';
    protected $guarded = [];

    public function school()
    {
        return $this->belongsTo(SchoolYear::class,'year_id');
    }//end fo school

    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }//end fo class

    public function degry(): HasMany
    {
        return $this->hasMany(Degry::class,'id');
    }

    public function perant(): HasMany
    {
        return $this->hasMany(ParentStudent::class,'id');
    }

    public function homework(): HasMany
    {
        return $this->hasMany(StudentHomework::class,'id');
    }
}
