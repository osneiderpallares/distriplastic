<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([            
            'name' => 'Administrador',
            'description' => 'Usuario con permiso administrativo',            
        ]);
        DB::table('rols')->insert([            
            'name' => 'Secretario(a)',
            'description' => 'Usuario con permiso de facturación',            
        ]);
        DB::table('rols')->insert([            
            'name' => 'Contador',
            'description' => 'Usuario con permiso contables',            
        ]);
        DB::table('rols')->insert([            
            'name' => 'Invitado',
            'description' => 'Usuario invitado sin permiso de edición',            
        ]);
    }
}
