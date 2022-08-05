<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Viewer{

  public static function getHeadDir(){
    return file_get_contents(resource_path("templates/head.blade.php"));
  }

  public static function getAllFiles(){
    return File::files(resource_path("userposts/"));
  }

  public static function getFile($slug, $path){
    if(!file_exists($path)){
      throw new ModelNotFoundException;
    }

    return cache()->remember("userposts.{$slug}",now()->addSeconds(5),fn()=>file_get_contents($path));
  }

}
