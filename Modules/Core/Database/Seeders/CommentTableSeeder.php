<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $comments = [
            [
                'issue_id' => 1,
                'body' => 'Issue no 01 body',
            ],
            [
                'issue_id' => 2,
                'body' => 'Issue no 02 body',
            ],
        ];

        foreach($comments as $comment) Comment::create([
            'issue_id' => $comment['issue_id'],
            'body' => $comment['body'],
        ]);
    }
}
