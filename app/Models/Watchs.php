<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo'
        // 'descs_id'
    ];
}
