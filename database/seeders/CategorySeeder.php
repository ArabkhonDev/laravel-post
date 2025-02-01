<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Development'],
            ['name' => 'Web Design'],
            ['name' => 'Online Marketing'],
            ['name' => 'Keyword Research'],
            ['name' => 'Email Marketing']
            ];

            Category::insert($categories);
    }
}
