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
            'password' => '123456'
        ], [
            'name' => 'Mahmudul Hasan',
            'email' => 'Mahmudul@gmail.com',
            'password' => '123456'
        ], [
            'name' => 'Rakibul Hasan',
            'email' => 'rakibul@gmail.com',
            'password' => '123456'
        ]];

        foreach ($users AS $user) {
            \App\Models\User::create($user);

        }

    }
}
