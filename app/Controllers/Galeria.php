<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Galeria extends BaseController
{
    public function index()
    {
        return view('formulario');
    }

    public function subir() {
        echo('<pre>');
        $file = $this->request->getFile('archivo');
        print_r($file);
        if (!$file->isValid()){
            echo $file->getErrorString();
            exit;
        } 

        $reglas = [
            'archivo' => [
                'label' => 'Archivo',
                'rules' => [
                    'is_image[archivo]',
                    'max_size[archivo, 100]',
                    'max_dims[archivo,1024,768]'
                ]
            ]
        ];

        if(!$this->validate($reglas)){
            echo("error de reglas");
            print_r($this->validator->getErrors());
            exit;
        }

        if (!$file->hasMoved()){
            $ruta= ROOTPATH . 'public/images';
            $file->move($ruta, 'Mi_imagen.png');
            echo("archivo cargado correctamente");
        }
        echo('</pre>');

    }
}
