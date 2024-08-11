<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBar extends Model
{
    use HasFactory;

    protected $fillable = [
        'bar_desc1', 'title', 'bar_desc2', 'file_name', 'file_path'
    ];
}
