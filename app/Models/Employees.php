<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table ='employees';

    protected $fillable =[
        'name',
        'specialty',
        'working_time',
        'experience',
        'contact',
        'description',
        'image',
    ];
}
