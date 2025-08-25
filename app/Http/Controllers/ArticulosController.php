<?php

namespace App\Http\Controllers;
# namespace es una forma de organizar y agrupar identificadores —como nombres de clases, funciones, variables o constantes— para evitar conflictos cuando diferentes partes de un programa usan el mismo nombre. Básicamente, es como poner apellidos a los nombres para que no se mezclen.

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
     #definimos los metodos para que el programa haga cosas:
     
    public function index(){
    return "aquí se mostrarán todos los artículos"; #que devuelve un mensaje en la URI indicada en la funcion donde esté este metodo en integrado en los parametros (en este caso /articulos)
    }

    public function create(){
        return "aquí se mostrará un formulario para crear un artículo";
    }

    public function show($articulo){
        return "aquí se mostrará el articulo {$articulo}";
    }
}
