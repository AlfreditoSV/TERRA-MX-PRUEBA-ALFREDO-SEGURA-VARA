<?php

//Ruta para manejar la peticion PUT /tasks/{id}
$data = [];
parse_str(file_get_contents('php://input'), $data);
if (count($routes) >= 3 && $routes[1] == 'tasks' && $routes[2] == 'update') return (new TaskController())->update($routes[3], $data);
