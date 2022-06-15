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
     *
     * @return void
     */
    public function run()
    {
        $su = User::create([
            'name' => 'superuser',
            'username' => 'su',
            'email' => 'su@local',
            'password' => $password = Hash::make('password'),
        ]);

        $user = User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@local',
            'password' => $password,
        ]);

        $su->friends()->attach([$user->id]);
    }
}
