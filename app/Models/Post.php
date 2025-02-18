<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $filable = ['title', 'slug', 'description', 'content', 'status', 'thumbnail', 'user_id'];
}
