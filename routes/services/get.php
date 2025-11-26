<?php

include __DIR__.'/../../app/controllers/TaskController.php';


if(count($routes)==1 && $routes[1]=='tasks') return (new TaskController())->index();
if(count($routes)==2 && $routes[1]=='tasks') return (new TaskController())->show($routes[2]);

