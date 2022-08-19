<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
      return view('hello',[
        'content' => Post::latest()->filter(request(['search','category','user']))
          ->paginate(10)->withQueryString(),
        'categories' => Category::all()
      ]);
    }

    public function singlepost (Post $post){
      return view('single',[
        'content' => $post
      ]);
    }
}
