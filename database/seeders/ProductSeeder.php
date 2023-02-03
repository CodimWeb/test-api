<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Samsung A8', 'price' => 10000.00, 'quantity' => 50, 'props' => 'color / red, weight / 1000, memory / 2gb, cores / 2'],
            ['name' => 'Samsung A10', 'price' => 12000.00, 'quantity' => 20, 'props' => 'color / white, weight / 1000, memory / 4gb, cores / 4'],
            ['name' => 'Samsung A12', 'price' => 15000.00, 'quantity' => 14, 'props' => 'color / black, weight / 1000, memory / 6gb, cores / 8'],
            ['name' => 'Samsung A12', 'price' => 15000.00, 'quantity' => 14, 'props' => 'color / silver, weight / 1000, memory / 6gb, cores / 8'],
            ['name' => 'Iphone 10', 'price' => 130000.00, 'quantity' => 50, 'props' => 'color / silver, weight / 300, memory / 64gb, cores / 8'],
            ['name' => 'Iphone 10', 'price' => 130000.00, 'quantity' => 30, 'props' => 'color / white, weight / 300, memory / 64gb, cores / 8'],
            ['name' => 'Iphone 10', 'price' => 130000.00, 'quantity' => 60, 'props' => 'color / black, weight / 300, memory / 64gb, cores / 8'],
            ['name' => 'Iphone 10', 'price' => 135000.00, 'quantity' => 10, 'props' => 'color / silver, weight / 300, memory / 128gb, cores / 8'],
            ['name' => 'Iphone 10', 'price' => 135000.00, 'quantity' => 15, 'props' => 'color / white, weight / 300, memory / 128gb, cores / 8'],
            ['name' => 'Iphone 10', 'price' => 135000.00, 'quantity' => 25, 'props' => 'color / black, weight / 300, memory / 128gb, cores / 8'],
            ['name' => 'Iphone 11', 'price' => 150000.00, 'quantity' => 50, 'props' => 'color / silver, weight / 400, memory / 128gb, cores / 12'],
            ['name' => 'Iphone 11', 'price' => 150000.00, 'quantity' => 30, 'props' => 'color / white, weight / 400, memory / 128gb, cores / 12'],
            ['name' => 'Iphone 11', 'price' => 150000.00, 'quantity' => 50, 'props' => 'color / black, weight / 400, memory / 64gb, cores / 12'],
            ['name' => 'Iphone 11', 'price' => 145000.00, 'quantity' => 34, 'props' => 'color / silver, weight / 400, memory / 64gb, cores / 12'],
            ['name' => 'Iphone 11', 'price' => 145000.00, 'quantity' => 35, 'props' => 'color / white, weight / 400, memory / 64gb, cores / 12'],
            ['name' => 'Iphone 11', 'price' => 145000.00, 'quantity' => 33, 'props' => 'color / black, weight / 400, memory / 64gb, cores / 12'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }


    }
}
