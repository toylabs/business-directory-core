<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'created_at'     => '2019-09-16 07:53:12',
                'updated_at'     => '2019-09-16 07:53:12',
            ],
        ];

        User::insert($users);
    }
}
