<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

// default route
Route::get('/', function () {
    return view('hello',[
      'content' => Post::latest('created_at')->get()
    ]);
});

// debug route for testing: DO NOT USE POSTPROD
Route::get('debug', function () {
    return view('debug',[
      'content' => 'foo'
    ]);
});

// debug: database connection test: DO NOT USE POSTPROD
Route::get('/db-test', function () {
    if(DB::connection()->getDatabaseName())
      echo "success" . DB::connection()->getDatabaseName();
    else ddd(DB::connection()->getDatabaseName());
});

Route::get('login', function () {
    return view('login');
});

Route::get('posts/{post:slug}', function (Post $post){
    return view('single',[
      'content' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category){
    return view('category',[
      'content' => $category->posts
    ]);
});

Route::get('authors/{user:username}', function (User $user){
    return view('hello',[
      'content' => $user->posts
    ]);
});
