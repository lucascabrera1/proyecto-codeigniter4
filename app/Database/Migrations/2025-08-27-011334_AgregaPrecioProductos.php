<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregaPrecioProductos extends Migration
{
    public function up()
    {
        //
        $campos = [
            'precio' => [
                'type' => 'decimal',
                'constraint' => '10.2',
                'after' => 'nombre',
                'null' => false,
                'default' => 125
            ]
        ];
        $this->forge->addColumn('productos', $campos);
    }

    public function down()
    {
        //php spark migrate:rollback -b (batch) ejecuta esto por cli
        $this->forge->dropColumn('productos', 'precioreventa');
    }
}
