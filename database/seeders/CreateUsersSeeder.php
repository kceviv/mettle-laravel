<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'role'=>'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'is_admin' => '0',
                'role' => '',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'super',
                'email' => 'super@super.com',
                'is_admin' => '1',
                'role' => 'superadmin',
                'password' => bcrypt('123456'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
