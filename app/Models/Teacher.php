<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'reg_num',
        'subject',
        'dob',
        'blood_group',
        //------ Added by ANAM ISLAM 23.04.2023
        'email' 
        //------ Added by ANAM ISLAM 23.04.2023
    ];
}
