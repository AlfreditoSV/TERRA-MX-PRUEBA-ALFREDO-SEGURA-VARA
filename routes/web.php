<?php

include __DIR__ . '/../app/controllers/TaskController.php';

//Analizar la URI y dividirla en segmentos
$uri = trim($_SERVER['REQUEST_URI']);
$routes = array_filter(explode('/', $uri));
$json = [];

//Manejar las diferentes peticiones HTTP y rutas
if (isset($_SERVER['REQUEST_METHOD'])) {
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if (!empty($routes)) {
                include __DIR__ . '/services/get.php';
            }
            if ($uri == '/') {
                include __DIR__ . '/../views/tasks/index.php';
                return;
            }
            if (str_contains($uri, '/tasks/add')) {
                include __DIR__ . '/../views/tasks/add.php';
                return;
            }
            if (str_contains($uri, '/tasks/edit/')) {
                include __DIR__ . '/../views/tasks/edit.php';
                return;
            }
            break;
        case 'POST':
            include __DIR__ . '/services/post.php';
            break;
        case 'PUT':
            include __DIR__ . '/services/put.php';
            break;
        case 'DELETE':
            include __DIR__ . '/services/delete.php';
            break;
        default:
            break;
    }
}
