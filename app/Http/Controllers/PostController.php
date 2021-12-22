<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class PostController extends Controller
{
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', ValidationRule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', ValidationRule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();
    //     array:6 [▼
    //     "title" => "test"
    //     "slug" => "test"
    //     "excerpt" => "tkk"
    //     "body" => "kkkl"
    //     "category_id" => "6"
    //     "user_id" => 104
    //   ]

        Post::create($attributes);

        return redirect('/');
    }
}
