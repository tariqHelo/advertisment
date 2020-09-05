<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title' , 'image' ,'user_id' , 'description' , 'published'];
}