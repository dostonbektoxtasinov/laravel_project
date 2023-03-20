<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /* 
    * bu bazaga malummot kiritish 
    * uchun phpMyAdmin dagi table 
    * column larini kiritb qoyiladi  
    * bunga tegishli:
    * PostController
    * Migration create_posts_table.php  
    */
    protected $fillable = [
        'title',
        'short_content',
        'content',
        'photo'
    ];


    /* 
    * yoki bu 
    * himoyalangan lari bu yerda 
    * himoyalanmagani wart emas
    */


    // protected $guarded = [];
}
