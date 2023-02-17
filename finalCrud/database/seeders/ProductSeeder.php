<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 50; $i++) { 
            DB::table('products')->insert([
                'name' => "Nombre $i",
                'description' => "Descripcion numero $i",
                'price' => $i * 0.83,
            ]);
        }
    }
}
