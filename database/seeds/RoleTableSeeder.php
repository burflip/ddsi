<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrador'
        ]);
        DB::table('roles')->insert([
            'name' => 'administrativo',
            'display_name' => 'Gestor Administrativo'
        ]);
        DB::table('roles')->insert([
            'name' => 'financiero',
            'display_name' => 'Administrador Financiero'
        ]);
    }
}
