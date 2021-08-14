<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Issue;

class IssueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $issues = [
            [
                'title' => 'issue no 01',
                'body' => 'issue no 01 body',
                'uuid' => 1,
                'slug' => 'slug 01'
            ],
            [
                'title' => 'issue no 02',
                'body' => 'issue no 02 body',
                'uuid' => 2,
                'slug' => 'slug 02'
            ],
        ];

        foreach($issues as $issue) Issue::create([
            'title' => $issue['title'],
            'body' => $issue['body'],
            'uuid' => $issue['uuid'],
            'slug' => $issue['slug'],
        ]);
    }
}
