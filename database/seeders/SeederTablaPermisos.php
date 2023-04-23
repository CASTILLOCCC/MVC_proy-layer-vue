<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[//tablaRoles
            'ver-rol',
            'crear-rol',  
            'edit-rol',
            'borrar-rol',
            //tablaCategorias
            'ver-category',
            'crear-category',  
            'edit-category',
            'borrar-category',
            //tablaPost
            'ver-post',
            'crear-post',  
            'edit-post',
            'borrar-post',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
