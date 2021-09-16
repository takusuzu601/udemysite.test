<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'=>'Crear curse',
        ]);
        Permission::create([
            'name'=>'Leer curse',
        ]);
        Permission::create([
            'name'=>'Actualizar curse',
        ]);
        Permission::create([
            'name'=>'Eliminar curse',
        ]);
        Permission::create([
            'name'=>'Ver dashboard',
        ]);
        Permission::create([
            'name'=>'Crear role',
        ]);
        Permission::create([
            'name'=>'Listar role',
        ]);
        Permission::create([
            'name'=>'Editar role',
        ]);
        Permission::create([
            'name'=>'Eliminar role',
        ]);
        Permission::create([
            'name'=>'Leer usuarios',
        ]);
        Permission::create([
            'name'=>'Editar usuarios',
        ]);
    }
}
