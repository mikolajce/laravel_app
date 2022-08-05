<?php

use Illuminate\Support\Facades\Route;
use App\Models\Viewer;

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
    return view('hello');
});

Route::get('debug', function () {
    return view('post_template',[
      'content' => Viewer::getAllFiles()
    ]);
});

Route::get('login', function () {
    return view('login',[
      'head' => Viewer::getHeadDir()
    ]);
});

Route::get('post_template', function () {
    return view('post_template',[
      'head' => Viewer::getHeadDir()
    ]);
});

Route::get('/userposts/{post}', function ($slug) {
    $path = resource_path("userposts/{$slug}.html");

    return view('post_template',[
      'content' => Viewer::getFile($slug, $path),
      'head' => Viewer::getHeadDir()
    ]);

})->where('post', '\b(post)[0-9]+\b');
