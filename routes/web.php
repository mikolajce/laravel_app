<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

// home route with search engine
Route::get('/', [PostController::class, 'index'])->name('home');

// debug: database connection test: DO NOT USE POSTPROD
Route::get('/db-test', [Controller::class, 'DBconn']);

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', function () {
    return view('login');
});

Route::get('posts/{post:slug}',[PostController::class, 'singlepost']);

Route::get('authors/{user:username}', function (User $user){
    return view('hello',[
      'content' => $user->posts
    ]);
});

Route::get('/about', function (){
    return view('mikolajce',[
        'content' => 'foo'
    ]);
});
