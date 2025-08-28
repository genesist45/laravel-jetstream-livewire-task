<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 't_students';
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'gender', 'dob', 'age'];
}
