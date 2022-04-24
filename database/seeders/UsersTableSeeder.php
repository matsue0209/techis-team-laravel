<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Admin',
            'tel' => '09011111111',
            'email' => 'Admin@team.com',
            'address' => 'テスト県テスト市1-1-1',
            'password' => bcrypt('team80test'),
            'role' => '1'
        ]);
    }
}
