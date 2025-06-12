<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();
        DB::table('products')->insert([ 
        [
            'product_name' => 'Nike Air Max 270',
            'category_id' => 1,
            'product_image' => null,
            'price' => 10000,
            'stock' => 50,
        ]
    ]);
    }
}
