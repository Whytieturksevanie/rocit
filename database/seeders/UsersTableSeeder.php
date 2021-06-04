<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'email'=> 'esma_yilmaz7@hotmail.com',
            'username'=> 'Esma Yilmaz',
            'password' => Hash::make('Rocit1234'),
            'role_id'    => 1,
            'created_at'    => '2021-05-14 18:37:16',
            'updated_at'    => '2021-05-14 18:37:16',
        ]);
    }
}
