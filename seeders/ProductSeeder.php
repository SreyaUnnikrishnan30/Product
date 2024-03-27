<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'SAMSUNG s22',
            'image' => 's22.png',
            'description' => 'this phone is good features phone',
            'variants' => 'pink'
        ]);
    }
}
