<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIEventos;
use Controllers\APIRegalos;
use Controllers\APIPonentes;
use Controllers\AuthController;
use Controllers\EventosController;
use Controllers\PaginasController;

$router = new Router();



$router->get('/', [PaginasController::class, 'index']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);
$router->get('/cotizaciones', [PaginasController::class, 'cotizaciones']);



$router->comprobarRutas();