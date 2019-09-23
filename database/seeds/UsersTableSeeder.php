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
                'password'       => '$2y$10$EuAHAyoM/rKETyu3HSjReOJxxnrrgTz80z.xsw9sI.5tHDqWHfZ5q',
                'remember_token' => null,
                'created_at'     => '2019-09-23 14:43:48',
                'updated_at'     => '2019-09-23 14:43:48',
            ],
        ];

        User::insert($users);
    }
}
