<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Products::class,50)->create();
    }
}
