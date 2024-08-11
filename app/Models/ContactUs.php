<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'phone', 'facebook', 'instagram', 'address', 'content' 
        // 'get_there', 'dress_code'
    ];
}
