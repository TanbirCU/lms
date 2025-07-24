<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'lesson_date',
        'lesson_time',
        'zoom_link',
        'zoom_start_url',
        'zoom_meeting_id',
        'recording_url',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function isUpcoming()
    {
        return now()->lt($this->lesson_date . ' ' . $this->lesson_time);
    }
}
