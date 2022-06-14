<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'All Posts',
            'posts' => Post::latest()->get()
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

    public function category(Category $category)
    {
        // dd($category->posts);
        $data = [
            'title' => 'Post By Category: '.$category->name,
            'posts' => $category->posts,
            'category' => $category->name,
        ];
        return view('posts', $data);
    }
}
