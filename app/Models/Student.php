<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 'fullname', 'gpa', 'smiley', 'class', 'is_owner','user_id','token'
    ];

    protected $primaryKey = 'st_id';

}
