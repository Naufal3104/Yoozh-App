<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->delete();
        DB::table('user')->insert([ 
            [
                'username' => 'ilham', 
                'fullname' => 'Ilham', 
                'email' => 'ilham@gmail.com', 
                'phone' => '1234567890',
                'birth_date' => '2000-02-02',
                'role' => 0, 
                'password' => Hash::make('ilham') 
            ],
            [
                'username' => 'admin', 
                'fullname' => 'Administrator', 
                'email' => 'admin@gmail.com', 
                'phone' => '1234567890',
                'birth_date' => '2000-01-01',
                'role' => 1, 
                'password' => Hash::make('admin')
            ] 
        ]);
    }
}
