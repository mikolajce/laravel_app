<?php

use Illuminate\Support\Facades\Route;
use App\Models\Viewer;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

// default route
Route::get('/', function () {
    return view('hello',[
      'content' => Viewer::getAllFiles()
    ]);
});

// debug route for testing: DO NOT USE POSTPROD
Route::get('debug', function () {
    return view('welcome',[
      'content' => 'foo'
    ]);
});

Route::get('login', function () {
    return view('login');
});

Route::get('/userposts/{post}', function ($slug) {
    $path = resource_path("userposts/{$slug}.html");

    return view('post_template',[
      'content' => Viewer::getFile($slug, $path)
    ]);

})->where('post', '\b(post)[0-9]+\b');
