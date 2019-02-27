<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $primaryKey = 'classroom_id';
    protected $table = 'classrooms';
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}