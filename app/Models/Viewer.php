<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Viewer{
  public $file_template;
  public $title;
  public $slug;
  public $date;
  public $excerpt;
  public $body;

  public function __construct($file_template,$title,$slug,$date,$excerpt,$body){
      $this->file_template = $file_template;
      $this->title = $title;
      $this->slug = $slug;
      $this->date = $date;
      $this->excerpt = $excerpt;
      $this->body = $body;
  }

  public static function getAllFiles(){
    return cache()->remember('allUserposts', now()->addMinutes(1), function(){
      return collect(
          File::files(resource_path("userposts/")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Viewer(
                $document->file_template,
                $document->title,
                $document->slug,
                $document->date,
                $document->excerpt,
                $document->body(),
            ))
            ->sortByDesc('date');
    });
  }

  public static function getFile($slug, $path){

    $it = static::getAllFiles()->firstWhere('slug', $slug);
    if (!$it)
      throw new ModelNotFoundException();
    else
      return $it;
  }

}
