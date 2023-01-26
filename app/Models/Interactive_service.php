<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interactive_service extends Model
{
    use HasFactory;

    protected $table ='interactive_services';

    protected $fillable =[
        'name',
        'status',
    ];
}
