<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Andi',
               'email'=>'andi@email.com',
               'password'=> bcrypt('12345'),
               'remember_token'=> Str::random(60),
               'akses'=>'admin',
            ],
            [
                'name' => 'Budi',
               'email'=>'budi@email.com',
               'password'=> bcrypt('12345'),
               'remember_token'=> Str::random(60),
               'akses'=>'user',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
