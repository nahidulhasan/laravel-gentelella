<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [[
            'name' => 'Nahidul Hasan',
            'email' => 'nahidul@gmail.com',
            'password' => '123456',
            'type' => 'super_admin'
        ], [
            'name' => 'Mahmudul Hasan',
            'email' => 'Mahmudul@gmail.com',
            'password' => '123456',
            'type' => 'super_admin'
        ], [
            'name' => 'Nafis Rahman',
            'email' => 'nafis@gmail.com',
            'password' => '123456',
            'type' => 'super_admin'
        ]];

        foreach ($users AS $user) {
            \App\Models\User::create($user);

        }

    }
}
