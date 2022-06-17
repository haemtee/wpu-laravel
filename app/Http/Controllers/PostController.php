<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;


class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = " in $category->name";
        };
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = " by $author->name";
        };

        $data = [
            'title' => 'All Blogs' . $title,
            'active' => 'posts',
            'posts' =>  Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ];
        return view('posts', $data);
    }

    public function show(Post $post)
    {
        $data = [
            'title' => $post->title,
            'active' => 'posts',
            'post' => $post,
        ];
        return view('post', $data);
    }


}
