<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blogs',
            'posts' => Post::all(),
        ];
        return view('posts', $data);
    }

    public function show(Post $post)
    {
        $data = [
            'title' => $post->title,
            'post' => $post,
        ];
        return view('post', $data);
    }
}
