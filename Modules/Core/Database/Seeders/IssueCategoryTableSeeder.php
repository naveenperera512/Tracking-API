<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\IssueCategory;

class IssueCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $issueCategories = [
            [
                'issue_id' => 1,
                'category_id' => 1,
            ],
            [
                'issue_id' => 2,
                'category_id' => 2,
            ],
        ];

        foreach($issueCategories as $issueCategory) IssueCategory::create([
            'issue_id' => $issueCategory['issue_id'],
            'category_id' => $issueCategory['category_id'],
        ]);
    }
}
