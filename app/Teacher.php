<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'teacher_id';
    protected $table = 'teachers';
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}