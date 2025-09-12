<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Almacén',
                'descripcion' => 'descripción de almacén'
            ],
            [
                'nombre' => 'Contabilidad',
                'descripcion' => 'descripción de contabilidad'
            ],
            [
                'nombre' => 'Finanzas',
                'descripcion' => 'descripción de finanzas'
            ],
            [
                'nombre' => 'RRHH',
                'descripcion' => 'descripción de RRHH'
            ],
            [
                'nombre' => 'Sistemas',
                'descripcion' => 'descripción de sistemas'
            ]
        ];
        $this->db->table('departamentos')->insertBatch($data);
    }
}
