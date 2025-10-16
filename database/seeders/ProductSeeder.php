<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Coca-Cola',
                'description' => 'Gaseosa',
                'sku' => '025206',
                'stock' => 10,
                'price' => 11.00,
                'is_active' => 1,
            ],
            [
                'name' => 'Papas Lays',
                'description' => 'snack papas fritas',
                'sku' => '025207',
                'stock' => 25,
                'price' => 1.50,
                'is_active' => 1,
            ],
            [
                'name' => 'Limón',
                'description' => 'Limón fresco',
                'sku' => '025208',
                'stock' => 18,
                'price' => 2.00,
                'is_active' => 1,
            ],
            [
                'name' => 'Manzana',
                'description' => 'Manzana roja',
                'sku' => '025209',
                'stock' => 15,
                'price' => 1.80,
                'is_active' => 1,
            ],
            [
                'name' => 'Pepino',
                'description' => 'Pepino fresco',
                'sku' => '025210',
                'stock' => 20,
                'price' => 1.80,
                'is_active' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
