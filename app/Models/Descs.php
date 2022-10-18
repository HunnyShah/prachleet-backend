<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'rate',
        'cast',
        'info'
    ];
}
