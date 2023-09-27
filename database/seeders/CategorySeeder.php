<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public array $data = [
        ['name' => 'category 1'],
        ['name' => 'category 2'],
        ['name' => 'category 3'],
        ['name' => 'category 4'],
        ['name' => 'category 5'],
        ['name' => 'category 6'],
        ['name' => 'category 7'],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $datum)
        {
            Category::query()->updateOrCreate($datum);
        }
    }
}
