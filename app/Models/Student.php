<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name', 'image', 'age', 'status'];
    protected $casts = [
        'age' => 'integer',
    ];
}
