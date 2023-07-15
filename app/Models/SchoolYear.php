<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolYear extends Model
{

    protected $table = 'school_years';
    protected $guarded = [];

    public function class(): HasMany
    {
        return $this->hasMany(Classes::class,'id');
    }

    public function material(): HasMany
    {
        return $this->hasMany(Material::class,'id');
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class,'id');
    }
}
