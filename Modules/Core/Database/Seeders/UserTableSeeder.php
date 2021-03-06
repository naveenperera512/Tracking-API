<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\user;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("password"),
                'remember_token' => 'basic_token',
            ],
            [
                "name" => "nirash",
                "email" => "nirash@gmail.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("password"),
                'remember_token' => 'basic_token',
            ],
            [
                "name" => "naveen",
                "email" => "naveen@gmail.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("password"),
                'remember_token' => 'basic_token',
            ],
        ];

        foreach($users as $user) User::create([
            "name" => $user["name"],
            "email" => $user["email"],
            "email_verified_at" => $user["email_verified_at"],
            "password" => $user["password"],
            "remember_token" => $user["remember_token"],
        ]);
    }
}
