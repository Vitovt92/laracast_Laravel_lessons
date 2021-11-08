<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::truncate();
        \App\Models\Category::truncate();
        \App\Models\Post::truncate();

        $user = \App\Models\User::factory()->create();

        $work = Category::create([
            'name' => "work",
            'slug' => "work"
        ]);

        $personal = Category::create([
            'name' => "personal",
            'slug' => "personal"
        ]);

        $home = Category::create([
            'name' => "home",
            'slug' => "home"
        ]);

        \App\Models\Post::create([
            'category_id' => $work->id,
            'user_id' => $user->id,
            'title' => "First Post",
            'slug' => "my_first_post",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit...",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempore, nisi officia at eligendi, voluptatibus fugit iure officiis cupiditate id rem. Placeat error a ab possimus incidunt! Asperiores, ab harum."
        ]);

        \App\Models\Post::create([
            'category_id' => $home->id,
            'user_id' => $user->id,
            'title' => "Second Post",
            'slug' => "my_second_post",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit...",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempore, nisi officia at eligendi, voluptatibus fugit iure officiis cupiditate id rem. Placeat error a ab possimus incidunt! Asperiores, ab harum."
        ]);

        \App\Models\Post::create([
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'title' => "Third Post",
            'slug' => "my_third_post",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit...",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempore, nisi officia at eligendi, voluptatibus fugit iure officiis cupiditate id rem. Placeat error a ab possimus incidunt! Asperiores, ab harum."
        ]);
    }
}
