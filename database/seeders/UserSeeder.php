<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Hapsatou Thiam",
                'email' => "thiamhapstou@gmail.com",
                'email_verified_at' => now(),
                'password' => Hash::make('hapsatou'),
                'remember_token' => Str::random(10),
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
