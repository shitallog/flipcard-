<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class online extends Model
{
    use HasFactory;
	 protected $fillable = [
        'student_name',
        'father_name',
        'mother_name',
        'last_name',
        'mobile_number',
        'email',
        'nationality',
        'date_of_birth',
        'gender',
        'marital_status',
        'adhar_number',
        'category',
        'course',
        'address',
    ];
}
