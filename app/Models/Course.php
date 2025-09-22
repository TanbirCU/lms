<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'small_description',
        'description',
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    // public function lessons()
    // {
    //     return $this->hasMany(Lesson::class);
    // }


}
