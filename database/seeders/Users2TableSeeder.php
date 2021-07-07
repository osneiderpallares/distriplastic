<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name'       => 'OSNEIDER ANTONIO',
            'lastname'  => 'PALLARES PÉREZ',
            'username'   => 'admin',
            'email'      => 'osneider.pallares20@gmail.com',            
            'password'   =>  Hash::make('3107386266'),                        
        ]);
    }
}
