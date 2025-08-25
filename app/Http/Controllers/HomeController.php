<?php

namespace App\Http\Controllers;
# namespace es una forma de organizar y agrupar identificadores —como nombres de clases, funciones, variables o constantes— para evitar conflictos cuando diferentes partes de un programa usan el mismo nombre. Básicamente, es como poner apellidos a los nombres para que no se mezclen.

use Illuminate\Http\Request;

class HomeController extends Controller
{  
    #definimos un metodo invoke para que a la hora de asignarle el control a la ruta, podamos simplemente pasarle el controlador sin mencionar el  nombre del metodo y Laravel entenderá que en el controlador solo hay un unico metodo:
     /* public function __invoke(){
        return "bienvenido a la pagina principal"; #que devuelve un mensaje
    }*/

    #definimos un metodo:
    public function index(){
        /*return "bienvenido a la pagina principal"; #que devuelve un mensaje*/
        return view('home'); #asi indicamos a Laravel que estamos intentando llamar a un documento que está en las vistas (resources/views) que se llama home
    }
}
