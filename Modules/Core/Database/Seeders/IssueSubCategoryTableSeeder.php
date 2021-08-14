<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\IssueSubCategory;

class IssueSubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $issueSubCategories = [
            [
                'issue_id' => 1,
                'subcategory_id' => 1,
            ],
            [
                'issue_id' => 2,
                'subcategory_id' => 2,
            ],
        ];

        foreach($issueSubCategories as $issueSubCategory)
        IssueSubCategory::create([
            'issue_id' => $issueSubCategory['issue_id'],
            'subcategory_id' => $issueSubCategory['subcategory_id'],
        ]);
    }
}
