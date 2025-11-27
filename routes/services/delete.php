<?php

//Ruta para manejar la peticion DELETE /tasks/{id}
if (count($routes) == 3 && $routes[1] == 'tasks' && $routes[2] == 'delete') return (new TaskController())->delete($routes[3]);
