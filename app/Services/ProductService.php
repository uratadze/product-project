<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductService
{
    public function product($id=null): Model|Collection|Builder|array|null
    {
        $product = Product::query()->with('categories');

        return $id ? $product->find($id) : $product->get();
    }
}
