<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'clave' => 'empleado 1',
                'nombre' => 'Lucas Gabriel Cabrera',
                'fecha_nacimiento' => '1994-03-28',
                'telefono' => '3402415206',
                'email' => 'lucas_cabrera1@hotmail.com',
                'id_departamento' => 1
            ],
            [
                'clave' => 'empleado 2',
                'nombre' => 'Luciano Bosso',
                'fecha_nacimiento' => '1993-12-13',
                'telefono' => '3402485303',
                'email' => 'lucianobosso@hotmail.com',
                'id_departamento' => 2
            ],
            [
                'clave' => 'empleado 3',
                'nombre' => 'Franco Alvarez',
                'fecha_nacimiento' => '1999-04-13',
                'telefono' => '3402998032',
                'email' => 'franchialvarez@hotmail.com',
                'id_departamento' => 3
            ],
            [
                'clave' => 'empleado 4',
                'nombre' => 'Facundo Cristini',
                'fecha_nacimiento' => '2000-03-26',
                'telefono' => '3402546007',
                'email' => 'facucristini@hotmail.com',
                'id_departamento' => 4
            ],
            [
                'clave' => 'empleado 5',
                'nombre' => 'Anibal Luis Schiaves',
                'fecha_nacimiento' => '1979-11-19',
                'telefono' => '3402607782',
                'email' => 'anibalschiaves@hotmail.com',
                'id_departamento' => 5
            ]
        ];
        $this->db->table('empleados')->insertBatch($data);
    }
}
