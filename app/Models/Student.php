<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['last_name', 'other_names', 'matric_number', 'email', 'phone', 'faculty', 'department', 'gender', 'age', 'level', 'year_of_admission', 'school_fess_status', 'state_of_origin', 'password'];
    
    // protected $table = 'students';
}
