<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'andreneves',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('123456'),
            'perfil' => 1,
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'perfil' => 1,
        ]);

        User::create([
            'name' => 'gabriel',
            'email' => 'gpsilva0499@gmail.com',
            'password' => Hash::make('123456'),
            'perfil' => 0,
        ]);

        User::create([
            'name' => 'vicky',
            'email' => 'vic@gmail.com',
            'password' => Hash::make('123456'),
            'perfil' => 0,
        ]);
          
        User::create([
            'name' => 'caio',
            'email' => 'caio@gmail.com',
            'password' => Hash::make('123456'),
            'perfil' => 0,
        ]);

        }
}