<?php

include_once __DIR__ . '/interfaces/ControllerInterface.php';
include_once __DIR__.'/../../app/models/TaskModel.php';
class TaskController implements Controller{

    //Metodo para manejar la peticion GET /tasks
    public function index()
    {
        $tasks=TaskModel::get();
        return $this->response($tasks);

    }
    //Metodo para manejar la peticion GET /tasks/{id}
    public function show($id)
    {

        $task=TaskModel::getById($id);
        return $this->response($task);
    }
    //Metodo para manejar la peticion POST /tasks
    public function store($data)
    {
        $task=TaskModel::insert($data);
        return $this->response($task);
    }
    //Metodo para manejar la peticion PUT /tasks/{id}
    public function update($id, $data)
    {
        $task=TaskModel::update($id,$data);
        return $this->response($task);
    }
    //Metodo para manejar la peticion DELETE /tasks/{id}
    public function delete($id)
    {
        $task=TaskModel::delete($id);
        return $this->response($task);
    }
    //Metodo para formatear la respuesta en formato JSON
    public function response($response)
    {
        $json = [
            'status' => 200,
            'result' => $response
        ];
        echo json_encode($json, http_response_code($json['status']));

    }

}