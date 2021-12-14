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



        // $user = \App\Models\User::factory()->create(["name" => "vitovt"]);
        // $post = \App\Models\Post::factory(50)->create(["user_id" => $user->id]);
        \App\Models\Comment::factory(50)->create();

    }
}
