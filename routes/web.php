<?php

$routes = array_filter(explode('/', $_SERVER['REQUEST_URI']));
$json=[];

if (empty($routes)){
    $json=[
        'status' => 404,
        'result'=>'Not found'
        ];

    echo json_encode($json,http_response_code($json['status']));
    return;
}


if (isset($_SERVER['REQUEST_METHOD']))
{
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
         include __DIR__.'/services/get.php';
            break;
        case 'POST':
        include __DIR__.'/services/post.php';
            break;
        case 'PUT':
            include __DIR__.'/services/put.php';
            break;
        case 'DELETE':
            include __DIR__.'/services/delete.php';
    }
}
