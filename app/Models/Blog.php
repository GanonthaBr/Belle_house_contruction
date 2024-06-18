<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'author',
    ];

    public function images()
    {
        return $this->hasMany('App\Models\BlogImages');
    }
    //add relationship to comment
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
}
