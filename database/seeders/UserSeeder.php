<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'name'=> 'Rafael Blum',
            'email'=> 'Rafaelblum_digital@hotmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('123'),
            'remember_token' => Str::random(10),
        ]);


        User::updateOrCreate([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        Todo::updateOrCreate([
            'checked' => fake()->boolean,
            'user_id' => User::where('email', 'Rafaelblum_digital@hotmail.com')->first()->id,
            'title' => fake()->sentence
        ]);
    }
}
