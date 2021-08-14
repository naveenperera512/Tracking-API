<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Image;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $images = [
            [
                'imagable_type' => 'Image Type',
                'imagable_id' => 1,
                'size' => 10,
                'path' => 'image path',
                'name' => '1st image',
                'extension' => 'jpg',
            ],
            [
                'imagable_type' => 'Image Type',
                'imagable_id' => 2,
                'size' => 20,
                'path' => 'image path',
                'name' => '2nd image',
                'extension' => 'jpg',
            ],
        ];

        foreach($images as $image) Image::create([
            'imagable_type' => $image['imagable_type'],
            'imagable_id' => $image['imagable_id'],
            'size' => $image['size'],
            'path' => $image['path'],
            'name' => $image['name'],
            'extension' => $image['extension'],
        ]);
    }
}
