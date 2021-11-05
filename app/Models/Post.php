<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{

    public $title;

    public $date;

    public $excerpt;

    public $body;

    public $slug;

    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {

        return cache()->rememberForever('posts.all', function () {
            $files = File::files(resource_path('posts'));
            return collect($files)
                ->map(function ($file) {
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function ($document) {
                    return new Post(
                        $document->title,
                        $document->date,
                        $document->excerpt,
                        $document->body(),
                        $document->slug,
                    );
                })
                ->sortByDesc('date');
        });
    }

    public static function find($slug)
    {

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {

        $posts = static::find($slug);

        if (!$posts) {
            throw new ModelNotFoundException();
        }
        return $posts;
    }
}
