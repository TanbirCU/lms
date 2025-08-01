<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Student extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];
}
