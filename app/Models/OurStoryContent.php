<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStoryContent extends Model
{
    use HasFactory;
    protected $table = 'our_story_content';
    public $timestamps = true;
    protected $fillable = [
        'content',
        'description',
    ];
}
