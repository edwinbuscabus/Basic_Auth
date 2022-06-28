<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Edwin Buscabus',
                'email'=>'edwin@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
            [
                'name'=> 'Bahog Ilok',
                'email'=>'ilok@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
            [
                'name'=> 'Bahog Nawng',
                'email'=>'nawng@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
