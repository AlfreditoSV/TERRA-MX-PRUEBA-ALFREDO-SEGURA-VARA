<?php

//Cacheo de errores

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/php_errors.log');


//Manejo de rutas
require_once __DIR__.'/../app/controllers/RoutesController.php';

$index = new RoutesController();
$index->index();


