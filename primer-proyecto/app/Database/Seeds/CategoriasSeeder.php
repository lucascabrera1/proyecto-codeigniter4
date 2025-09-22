<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            ['nombre' => 'bebidas'],
            ['nombre' => 'bebidas alcohólicas'],
            ['nombre' => 'comidas'],
            ['nombre' => 'descartables']
        ];
        $this->db->table('categorias')->insertBatch($data);
    }
}
