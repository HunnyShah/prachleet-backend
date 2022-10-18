<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'watch_id'
    ];
    // public function getMovies(){
    //     return $this->hasOne(Watchs::class ,'id');
    // }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function watch()
    // {
    //     return $this->belongsTo(Watchs::class);
    // }
}
