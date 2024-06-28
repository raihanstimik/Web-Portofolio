<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            "name" => "admin",
            "email" => "admin@admin.com",
            "password" => Hash::make("admin123"),
            "role_id" => 1
        ]);
    }
    // public function store()
    // {
    //     User::create([
    //         "name" => 'required|max:255',
    //         "email" => 'required|email|unique:users',
    //         "password" => Hash::make('required'),
    //         "role_id" => 'required',
    //     ]);
    // }
}
