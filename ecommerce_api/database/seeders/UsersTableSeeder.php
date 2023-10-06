<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@demo.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@demo.com',
                'password' => Hash::make('123456'),
            ],
        ];
        
        foreach ($userData as $key => $val) {
            User::create($val);
        }
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@demo.com',
        //     'password' => Hash::make('123456'),
        // ]);

        // User::create([
        //     'name' => 'User',
        //     'email' => 'user@demo.com',
        //     'password' => Hash::make('123456'),
        // ]);
    }
}
