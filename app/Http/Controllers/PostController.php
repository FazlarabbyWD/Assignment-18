<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function delete($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return redirect()->back()->with('success', 'Post deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Post not found.');
        }
    }
}
