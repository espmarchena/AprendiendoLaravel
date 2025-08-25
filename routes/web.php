<?php

# archivo encargado de recibir todas las peticiones que hagamos a la app, y una vez que las recibe me muestra un contenido u otro
# Es importante el orden en el que definamos las rutas, ya que las lee de arriba hacia abajo

use Illuminate\Support\Facades\Route;
#especifico que voy a usar ese controlador en este archivo:
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticulosController;

/* Route::get('/', HomeController::class); (si el metodo es invoke) */
Route::get('/', [HomeController::class, 'index']); 
#declaro array con dos parametros: la clase HomeController y el nombre del metodo para que sepa cual quiero usar dentro del controlador que le he dado
Route::get('/articulos', [ArticulosController::class, 'index']);
#declaro array con dos parametros: la clase ArticulosController y el nombre del metodo para que sepa cual quiero usar dentro del controlador que le he dado
Route::get('/articulos/create', [ArticulosController::class, 'create']);
#declaro array con dos parametros: la clase ArticulosController y el nombre del metodo para que sepa cual quiero usar dentro del controlador que le he dado
Route::get('/articulos/create', [ArticulosController::class, 'show']);
#ruta con parametro para hacer la funcion generica que abrirá tantos articulos como quiera crear: (sin usar controladores)
/* Route::get('/articulos/{articulo}', function ($articulo) {  #{articulo} se refiere a que es un contenido variable que se almacena en la variable $articulo
    return "aquí se mostrará el articulo {$articulo}";
    #devuelve un mensaje en la URI /articulos/... capturando en la variable $articulo el valor que se le haya pasado en los ...
    #por ejemplo, si accedo a http://blog.test/articulos/laravel el mensaje será: aquí se mostrará el articulo laravel
}); */


#ruta con varios parametros para hacer la funcion generica que abrirá tantos articulos como quiera crear
Route::get('/articulos/{articulo}/{categoria}', function ($articulo, $categoria) { // {articulo} se refiere a que es un contenido variable que se almacena en la variable $articulo 
    return "aquí se mostrará el articulo {$articulo} de la categoría {categoria}";
    #devuelve un mensaje en la URI /articulos/.../... capturando en la variable $articulo y $categoria el valor que se le haya pasado en los ...
    #por ejemplo, si accedo a http://blog.test/articulos/laravel/frontend el mensaje será: aquí se mostrará el articulo laravel de la categoría frontend
});

#ruta con uno o varios parametros (opcional) para hacer la funcion generica y mas funcional
Route::get('/articulos/{articulo}/{categoria?}', function ($articulo, $categoria = null) { // {categoria?} se refiere a que es un contenido variable OPCIONAL y en los parametros hay que capturar el valor de la categoria por defecto (null)
    if ($categoria){
        return "aquí se mostrará el articulo {$articulo} de la categoría {categoria}";
        #devuelve un mensaje en la URI /articulos/.../... capturando en la variable $articulo y $categoria el valor que se le haya pasado en los ...
        #por ejemplo, si accedo a http://blog.test/articulos/laravel/frontend el mensaje será: aquí se mostrará el articulo laravel de la categoría frontend
    }  
    return "aquí se mostrará el articulo {$articulo}";
    #si no se cumple la condicion de que no haya nada guardado en categoria, mostrará el mensaje sin ella
});

// get -> peticiones que hacemos al escribir una url o cuando clicamos en un enlace y se nos redirige a alguna pagina
// post -> peticiones que podemos hacer desde un formulario
// put -> peticion post pero actualiza un registro
// patch -> peticion post pero actualiza un registro
// delete -> peticion post pero elimina un registro

#RETURN. Ademas de devolver mensajes, podemos conectarnos a una bbdd, extraer info de ella o mostrar la info en un documento html. Esto lo haremos en los archivos llamados CONTROLADORES. Para crearlos usamos comandos artisan de Laravel