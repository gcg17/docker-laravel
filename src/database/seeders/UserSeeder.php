<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        #Usuario taller
        User::factory () -> create([
            'name' => 'Admin Taller',
            'email' => 'taller@test.com',
            'password' => Hash::make('password'),
            'role' => 'taller',
        ]);

        #Usuario cliente
        User::factory()->create([
            'name' => 'Juan Cliente',
            'email' => 'cliente1@test.com',
            'password' => Hash::make('password'),
            'role' => 'cliente',
        ]);

        #Otro cliente
        User::factory()->create([
            'name' => 'Ana Cliente',
            'email' => 'cliente2@test.com',
            'password' => Hash::make('password'),
            'role' => 'cliente',
        ]);
    }
}
