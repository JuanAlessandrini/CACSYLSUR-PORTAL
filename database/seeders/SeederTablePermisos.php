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

            //tabla cursos
            'ver-certificado',
            'crear-certificado',
            'editar-certificado',
            'borrar-certificado',

            //tabla empresas
            'ver-empresa',
            'crear-empresa',
            'editar-empresa',
            'borrar-empresa',
            //tabla grupos
            'ver-grupo',
            'crear-grupo',
            'editar-grupo',
            'borrar-grupo',
            //tabla usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',
            //tabla alumnos
            'ver-alumno',
            'crear-alumno',
            'editar-alumno',
            'borrar-alumno',
            //tabla inscripciones
            'ver-inscripcion',
            'crear-inscripcion',
            'editar-inscripcion',
            'borrar-inscripcion',

        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        };
    }
}
