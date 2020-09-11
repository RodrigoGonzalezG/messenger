<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rodrigo',
            'email' => 'rg_iori@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'Lupita',
            'email' => 'LupitaGonzalez@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'German',
            'email' => 'GermanGonzalez@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
