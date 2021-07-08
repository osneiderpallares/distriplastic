<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([            
            'name' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'osneider.pallares20@gmail.com',
            'email_verified_at' => now(),
            'username'   => 'admin',
            'password' => Hash::make('admin'),
            'rol'   => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([            
            'name' => 'Julieth',
            'lastname' => 'Vanegas',
            'email' => 'admin@white.com',
            'email_verified_at' => now(),
            'username'   => 'julieth',
            'password' => Hash::make('julieth'),
            'rol'   => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);       
    }
}
