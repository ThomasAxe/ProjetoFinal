<?php

// app/Models/Post.php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['user_id', 'image_url', 'caption'];
}

