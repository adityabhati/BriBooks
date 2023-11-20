<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Users::create([
            "username" => "BriBooks",
            "fullname" => "BriBooks",
            "email" => "bribooks@gmail.com",
            "password" => Hash::make("12345")
        ]);
    }
}
