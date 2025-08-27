<?php

namespace App\Controllers;
use App\Models\ProductosModel;

class Productos extends BaseController {

    public function __construct () {
        $this->productoModel = new ProductosModel();
        
    }

    public function index() {
        //echo "<h1>ProductosController</h1>";
        //print_r($this->session);
        /* return view ('plantillas/header', $data)
        .view('productos/show', $data)
        .view('plantillas/footer', ['copy' => '2023']); */
        helper("form");
         $db = \Config\Database::connect();

        //$query = $db->query("SELECT nombre, stock, codigo, precio FROM productos");
        //consulta a la db usando query builder class
        $condicion = ['stock < ' =>15, 'precio > ' =>50];
        /* $query = $db->table('productos')
        ->select('id_producto, codigo, stock, precio, nombre')
        ->where($condicion)
        ->orderBy('nombre', 'desc')
        ->limit(3)
        ->get(); */


        $sql = $db->table('productos');
        $sql->select('
            productos.codigo, 
            productos.nombre,
            productos.stock,
            productos.precio,
            almacenes.id_almacen
        ');
        $sql->join('almacenes', 'productos.id_almacen = almacenes.id_almacen');
        $query = $sql->get();
        $resultado = $query->getResultArray(); 
        echo $db-> getLastQuery();

        
        //print_r($query);
        /* $productomodel = new ProductosModel();
        $resultado = $productomodel->where('estatus', 1)->findAll(); */

        $data = ['titulo' => 'Catálogo de productos', 'productos' => $resultado];
        
        return view("productos/index", $data);
    }

    public function show($id) {
        $id = (int) $id;
        $productomodel = new ProductosModel();
        $producto = $productomodel->find($id);
        // Validar si se encontró el producto
        //dd($producto);
        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto con ID $id no encontrado");
        }
        
        $data = [
            'titulo' => 'Catálogo de productos', 
            'producto' => $producto
        ];
        return view("productos/show", $data);
        //return $this->response->setJSON($productomodel);
        /* return view ('plantillas/header', $data)
        .view('productos/show', $data)
        .view('plantillas/footer', ['copy' => '2023']); */
    }

    public function transaccion () {
        $data = [
            'codigo' => 6,
            'nombre' => 'producto 6',
            'stock' => 20,
            'precio' => 150
        ];
        
        echo $this->productoModel->insert($data);
        //echo $this->productoModel->update(2, $data);
        //echo $this->productoModel->delete(2);
        //echo $this->productoModel->withDeleted()->findAll() trae todos los registros incluyendo los eliminados
        //echo $this->productoModel->onlyDeleted()->findAll() trae todos los registros eliminados
        //echo $this->productoModel->purgeDeleted(); elimina definitivamente los registros
        //echo $this->productoModel->getInsertID();
    }

    public function othershow($id) {
        $data = [
            'titulo' => 'Catálogo de productos', 
            'id' =>$id
        ];
        return view ("productos/othershow", $data);
    }

    public function cat ($categoria, $id) {
        return "<h1>categoria $categoria <br/> id $id</h1>";
    }
}