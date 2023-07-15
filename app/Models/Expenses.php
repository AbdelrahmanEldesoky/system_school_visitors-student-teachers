<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expenses extends Model
{

    protected $table = 'expenses';
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
