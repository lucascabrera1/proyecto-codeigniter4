<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
//use CodeIgniter\RESTful\ResourceController;

class Almacen extends BaseController
{
    protected $helpers = ['form'];
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        echo $this->request->getMethod();
        echo '<br> método index';
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        echo $this->request->getMethod();
        echo '<br> método show '.$id;
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view ('almacen/new');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        echo $this->request->getMethod();
        echo '<br> método create';
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        return view ('almacen/edit', ['titulo' => 'Editar Almacén', 'id' => $id]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        echo $this->request->getMethod();
        echo '<br> método update ' .$id;

        print_r($this->request->getPost());
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        echo $this->request->getMethod();
        echo '<br> método delete ' .$id;
    }
}
