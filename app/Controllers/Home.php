<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        //echo "hola codeigniter 4";
        /* $migrate = \Config\Services::Migrations();
        try {
            //$migrate->latest();// esto ejecuta todas las migraciones de forma ordenada
            $migrate->regress(-1); //esta funcion recibe el numero del batch y regresa la migracion
            //1 es el actual
            //0 significa que regresa a cuando no tenia migraciones
            //-1 para solo revertir el ultimo
        } catch (Throwable $exception) {
            echo($exception);
        } */
       /* $seeder = \Config\Database::seeder();
       $seeder->call('CategoriasSeeder'); */
       helper('util_helper');
       echo(generaToken());
    }
}
