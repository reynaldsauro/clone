<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

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
                'name' => 'John Philip Villamor',
                'email' => 'johnboang@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('boang123123')
            ],
            [
                'name' => 'Reynald Sauro',
                'email' => 'naldsau@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('sausau123')
            ],
            [
                'name' => 'Ryan Patayon',
                'email' => 'rypats@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('cecilyan143')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
