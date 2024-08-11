<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStory extends Model
{
    use HasFactory;
    protected $table = 'our_story';
    public $timestamps = true;
    protected $fillable = [
        'title1', 'title2', 'top_desc1', 'top_desc2', 'desc'
    ];
}
