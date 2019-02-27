<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    protected $table = 'students';
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}