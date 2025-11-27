<?php

//Ruta para manejar la peticion GET /tasks y /tasks/{id}
if (count($routes) == 1 && $routes[1] == 'tasks') return (new TaskController())->index();
if (count($routes) == 2 && $routes[1] == 'tasks' && $routes[2] != 'add') return (new TaskController())->show($routes[2]);
