<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Laratrust\Traits\LaratrustUserTrait;

class Parents extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'parentis';
    protected $guarded = [];

    public function student(): HasMany
    {
        return $this->hasMany(Student::class,'id');
    }

}
