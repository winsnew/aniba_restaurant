<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationHour extends Model
{
    use HasFactory;

    protected $fillable = ['operation', 'operation_footer','book_now_link'];
}
