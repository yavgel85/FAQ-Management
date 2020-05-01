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
                'password'       => '$2y$10$ukLLeUNvgnnI5RIT/JWOJuejdINq2qM.cN9IElMOOqxaJMTE3qXY2',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
