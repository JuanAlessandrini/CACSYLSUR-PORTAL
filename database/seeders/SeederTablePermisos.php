<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


//spatie
use Spatie\Permission\Models\Permission;

class SeederTablePermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $permisos = [
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //tabla certificados
            'ver-certificado',
            'crear-certificado',
            'editar-certificado',
            'borrar-certificado',

            //tabla empresas
            'ver-empresa',
            'crear-empresa',
            'editar-empresa',
            'borrar-empresa',

        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        };
    }
}
