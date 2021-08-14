<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Category;
use Modules\Core\Entities\Subcategory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categories = [
            [
                'name' => 'category 01',
                'description' => 'category no 01 description',
                'subcategories' => [
                    [
                        'name' => 'SubCategory no 01',
                        'description' => 'SubCategory no 01 description',
                    ],
                    [
                        'name' => 'SubCategory no 02',
                        'description' => 'SubCategory no 02 description',
                    ]
                ]
            ],
            [
                'name' => 'category 02',
                'description' => 'category no 02 description',
                'subcategories' => [
                    [
                        'name' => 'SubCategory no 03',
                        'description' => 'SubCategory no 03 description',
                    ],
                    [
                        'name' => 'SubCategory no 04',
                        'description' => 'SubCategory no 04 description',
                    ]
                ]
            ],

        ];

        foreach($categories as $category){
            $category_entity = Category::create([
                'description' => $category['description'],
                'name' => $category['name'],
            ]);
            foreach($category["subcategories"] as $subcategory){
                Subcategory::create([
                    'category_id' => $category_entity->id,
                    'description' => $subcategory['description'],
                    'name' => $subcategory['name'],
                ]);
            }
        }
    }
}
