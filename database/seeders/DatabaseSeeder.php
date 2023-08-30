<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
//        User::factory()->count(2)->create();
//        $user = User::factory()->create();
//        Todo::factory()->count(5)->create(['user_id'=>$user->id]);
        $this->call(UserSeeder::class);
    }
}
