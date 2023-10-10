<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts($paginate = 10)
    {
        return Product::paginate($paginate);
    }

    // その他、商品関連のロジックをここに追加
}
