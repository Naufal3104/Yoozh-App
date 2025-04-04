<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'username' => 'admin', 
        //     'fullname' => 'Administrator', 
        //     'email' => 'admin@gmail.com', 
        //     'phone' => '1234567890', 
        //     'password' => Hash::make('admin'),
        // ]);
    }
}
