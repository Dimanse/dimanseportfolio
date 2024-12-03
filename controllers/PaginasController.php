<?php

namespace Controllers;

use MVC\Router;
use Model\Mensaje;
use Model\Trabajo;

Class PaginasController{

    public static function index(Router $router){
        
        $trabajos = Trabajo::all();
        // debuguear($trabajos);

        $router->render('paginas/index', [
            'titulo' => 'Inicio',
            'trabajos' => $trabajos,
        ]);
    }

    

    public static function contacto(Router $router){
        $alertas = [];
        

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mensaje = new Mensaje($_POST);
            $alertas = $mensaje->validar();

            
            if(empty($alertas)){
                $resultado = $mensaje->guardar();
                if($resultado){
                    header('Location: /');
                }
            }
            // debuguear($mensaje);

        }
        $alertas = Mensaje::getAlertas();
        $router->render('paginas/contacto', [
            'titulo' => 'Gracias por tomarte el tiempo de comunicarte conmigo. ¿Cómo puedo ayudarte hoy?',
            'alertas' => $alertas,
        ]);
    }
    public static function cotizaciones(Router $router){
        
        

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

        }
        
        $router->render('paginas/cotizaciones', [
            'titulo' => 'Gracias por tomarte el tiempo de comunicarte conmigo. ¿Cómo puedo ayudarte hoy?',
        ]);
    }


}