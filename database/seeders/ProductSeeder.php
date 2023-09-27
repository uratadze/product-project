<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public array $data = [
        [
            'name'  => 'product 1',
            'quantity' => 500,
            'price' => 10,
            'categories' => [1, 2, 3]
        ],[
            'name'  => 'product 2',
            'quantity' => 500,
            'price' => 10,
            'categories' => [4, 1, 3]
        ],[
            'name'  => 'product 3',
            'quantity' => 500,
            'price' => 10,
            'categories' => [7, 5, 1]
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $datum)
        {
            $categories = Category::query()->whereIn('id', $datum['categories'])->get();
            unset($datum['categories']);
            $product = Product::query()->updateOrCreate($datum);
            if ($product->wasRecentlyCreated)
            {
                $product->categories()->attach($categories);
            }
        }
    }
}
