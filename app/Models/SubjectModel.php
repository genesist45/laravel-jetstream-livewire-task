<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    protected $table = 't_subjects';
    protected $fillable = [
        'subject_code',
        'subject_title',
        'subject_description',
        'subject_lab_unit',
        'subject_lec_unit',
        'subject_total_unit',
    ];
}
