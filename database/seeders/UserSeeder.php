<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($x = 1; $x <= 1; $x++) {
            User::create([
                'name' => 'arabjon',
                'email' => 'arabjon' . '@example.com',
                'password' => Hash::make('secret'),
            ]);
        // }
        // User::factory(10)->create();
        $i = 1;
        while ($i <= 10) {
            User::create([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@example.com',
                'password' => Hash::make('password'),
            ]);
            $i++;
        }
        // User::create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10) . '@example.com',
        //     'password' => Hash::make('password'),
        // ]);

    }
}
