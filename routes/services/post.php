<?php


//Ruta para manejar la peticion POST /tasks
if (isset($_POST)) {
    if (count($routes) == 2 && $routes[1] == 'tasks' && $routes[2] == 'store') return (new TaskController())->store($_POST);
}
