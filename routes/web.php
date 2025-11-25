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
            $json=[
                'status' => 200,
                'result'=>'GET'
            ];
            break;
        case 'POST':
            $json=[
                'status' => 200,
                'result'=>'POST'
            ];
            break;
        case 'PUT':
            $json=[
                'status' => 200,
                'result'=>'PUT'
            ];
            break;
        case 'DELETE':
            $json=[
                'status' => 200,
                'result'=>'DELETE'
            ];
    }
    echo json_encode($json,http_response_code($json['status']));
}
