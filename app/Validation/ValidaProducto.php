<?php
    namespace App\Validation;

    class ValidaProducto {
        public function es_par($valor) {
            return $valor % 2 === 0;
        }
    }

?>