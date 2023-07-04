<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            0 => array(
                'name' => "admin",
                'email' => "admin@example.com",
                'password' => "123456",
                'mobile' => "09171234567",
                'role' => "admin"
            ),
            1 => array(
                'name' => "user",
                'email' => "user@example.com",
                'password' => "123456",
                'mobile' => "09179876543",
                'role' => "user"
            ),
        );
        

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
