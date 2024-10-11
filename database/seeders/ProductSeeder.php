<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

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
            'name' => 'Produk A',
            'description' => 'Deskripsi produk A',
            'price' => 100000,
            'stock' => 50,
            'image' => 'img/produk_a.jpg',
        ]);

        Product::create([
            'name' => 'Produk B',
            'description' => 'Deskripsi produk B',
            'price' => 150000,
            'stock' => 30,
            'image' => 'img/produk_b.jpg',
        ]);

        Product::create([
            'name' => 'Produk C',
            'description' => 'Deskripsi produk C',
            'price' => 200000,
            'stock' => 20,
            'image' => 'img/produk_c.jpg',
        ]);
    }
}
