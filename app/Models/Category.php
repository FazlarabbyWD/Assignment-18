<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $table = 'categories';


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}
