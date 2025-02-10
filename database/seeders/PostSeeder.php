<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run()
    {
        // for ($x = 1; $x <= 50; $x++) {
            for ($y = 1; $y <= 6; $y++) {
                Post::create([
                    'title' => Str::random(10),
                    'user_id' => 1,
                    'category_id'=> random_int(1,5),
                    'short_content' => Str::random(20),
                    'body' => Str::random(300),
                    'photo' => null,
                ]);
            }
        // }
        // Post::factory()->count(50)->create();
    }
}


   // $a = 1;
        // while ($a <= 10) {
        //     Post::create([
        //         'title' => Str::random(10),
        //         'user_id' => 1,
        //         'short_content' => Str::random(20),
        //         'body' => Str::random(300),
        //         'photo' => null,
        //     ]);
        //     $a++;
        // }
