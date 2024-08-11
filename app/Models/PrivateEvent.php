<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'title', 'description', 'contact_us_link'
    ];
}
