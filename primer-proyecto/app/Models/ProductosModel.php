<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ProductosModel extends Model {
        protected $table      = 'productos';
        protected $primaryKey = 'id_producto';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['nombre', 'stock', 'precio', 'codigo'];

        protected bool $allowEmptyInserts = false;
        protected bool $updateOnlyChanged = true;

        // Dates
        protected $useTimestamps = false;
        protected $dateFormat    = 'datetime';
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';
    }
?>