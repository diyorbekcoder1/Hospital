<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table = 'contacts';
    public $fillable = ['sender_name_surname', 'sender_email', 'sender_phone_number', 'subject', 'message','created_ip'];
}
