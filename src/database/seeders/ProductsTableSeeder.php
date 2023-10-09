<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 商品のサンプルデータ
        $products = [
            ['name' => 'Smartphone', 'price' => 299.99, 'category_id' => 1],
            ['name' => 'T-shirt', 'price' => 19.99, 'category_id' => 2],
            ['name' => 'Coffee Maker', 'price' => 49.99, 'category_id' => 3],
            ['name' => 'Action Figure', 'price' => 14.99, 'category_id' => 4],
        ];

        // データを挿入
        DB::table('products')->insert($products);
    }
}
