<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
          'name' => 'Mikołaj Cieśliczka',
          'username' => 'mikolajce',
          'email' => 'mikolajce@gmail.com',
          'password' => 'el3mEl3_n13_dl4_p54'
        ]);

        $personal = Category::create([
          // id = 1
          'name' => 'Personal',
          'slug' => 'personal',
        ]);

        $tests = Category::create([
          // id = 2
          'name' => 'Tests',
          'slug' => 'tests',
        ]);

        // Post::create([
        //   'category_id' => $personal->id,
        //   'user_id' => $user->id,
        //   'title' => 'Pierwszy post',
        //   'slug' => 'post-1',
        //   'excerpt' => 'Lorem lorem lorem',
        //   'body' => 'Treść posta'
        //   //,'published_at' => ''
        // ]);
        // Post::create([
        //   'category_id' => $tests->id,
        //   'user_id' => $user->id,
        //   'title' => 'Drugi post',
        //   'slug' => 'post-2',
        //   'excerpt' => 'ipsum ipsum ipsum',
        //   'body' => 'Kolejna treść posta'
        //   //,'published_at' => ''
        // ]);
        // Post::create([
        //   'category_id' => $personal->id,
        //   'user_id' => $user->id,
        //   'title' => 'Trzeci post',
        //   'slug' => 'post-3',
        //   'excerpt' => 'Siema siemanko',
        //   'body' => 'O tej porze każdy wypić może'
        //   //,'published_at' => ''
        // ]);

        // randomized user data
        User::factory(5)->create();

        // randomization exceptions
        Post::factory(3)->create([
          'category_id' => 1,
          'user_id' => 1,
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        for ($i=0;$i<20;$i++) {
          Post::factory()->create([
            'user_id' => User::all()->random()->id
          ]);
        }
    }
}
