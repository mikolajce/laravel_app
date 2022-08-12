<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

// default route
Route::get('/', function () {
    return view('hello',[
      'content' => Post::all()
    ]);
});

// debug route for testing: DO NOT USE POSTPROD
Route::get('debug', function () {
    return view('debug',[
      'content' => 'foo'
    ]);
});

Route::get('/db-test', function () {
    if(DB::connection()->getDatabaseName())
      echo "success" . DB::connection()->getDatabaseName();
    else ddd(DB::connection()->getDatabaseName());
});

Route::get('login', function () {
    return view('login');
});

Route::get('userposts/{id}', function (Post $id) {
    return view('post_template',[
      'content' => $id
    ]);
// Route::get('/userposts/{post}', function (Post $post) {
//     return view('post_template',[
//       'content' => $post
//     ]);

})->where('post', '\b(post)[0-9]+\b');
