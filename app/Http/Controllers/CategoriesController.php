<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getPostsByCategory($id)
    {
        $category = Category::with('posts')->find($id);

        if ($category) {
            $posts = $category->posts;
            return view('postsByCategory', compact('category', 'posts'));
        } else {
            return redirect()->back()->with('error', 'Category not found.');
        }
    }
}
