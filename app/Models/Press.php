<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'publisher', 'url', 'font_color', 'color', 'image'
    ];
}
