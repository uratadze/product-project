<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CategoryService
{
    public function category(int $id=null): Model|Collection|Builder|array|null
    {
        $category = Category::query()->with('products');

        return $id ? $category->find($id) : $category->get();
    }
}
