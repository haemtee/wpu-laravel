<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Home',

    ];
    return view('home', $data);
});

Route::get('/blog', [PostController::class, 'index']);


Route::get('/about', function () {
    $data = [
        'title' => 'About',
        "name" => "Kevin Alexander",
        "email" => "kevin@alexander.com",
        "img" => "goku.jpg"
    ];
    return view('about', $data);
});


Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    $data = [
        'title' => 'Categories',
        'categories' => Category::all(),
    ];
    return view('categories', $data);
});

Route::get('/categories/{category:slug}', [PostController::class, 'category']);

Route::get('/authors/{author:username}', function(User $author){
    $data = [
        'title' => "Post By Author: $author->name",
        'posts' => $author->posts,
    ];
    return view('posts', $data);
});