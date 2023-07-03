<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Posts extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function countPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }



    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
