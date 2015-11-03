<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose Nieto', 
            'email' => 'zerausotein@gmail.com', 
            'password' => \Hash::make('123456')
            ]);
        
        User::create([
            'name' => 'Fernando Suarez', 
            'email' => 'jfns1992@outlook.com', 
            'password' => \Hash::make('246800')
            ]);
            
        User::create([
            'name' => 'Humberto Velez', 
            'email' => 'josef.nieto@gruposamant.com', 
            'password' => \Hash::make('135790')
            ]);
    }
}
