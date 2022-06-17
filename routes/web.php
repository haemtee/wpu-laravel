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
        'active' => 'home',

    ];
    return view('home', $data);
});

Route::get('/posts', [PostController::class, 'index']);


Route::get('/about', function () {
    $data = [
        'title' => 'All Authors',
        'active' => 'about',
        "authors" => User::all(),
    ];
    return view('about', $data);
});


Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    $data = [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ];
    return view('categories', $data);
});
