<?php

//Cacheo de errores
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/php_errors.log');

//Cabeceras
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
header('content-type: application/json; charset=utf-8');
header('Content-Type: text/html; charset=utf-8');


//Conexion a base de datos
require_once __DIR__ . '/../config/connection_database.php';
$connect=ConnectionDatabase::connection();
$migration=ConnectionDatabase::migration();


//Manejo de rutas
require_once __DIR__.'/../app/controllers/RoutesController.php';

$index = new RoutesController();
$index->index();


