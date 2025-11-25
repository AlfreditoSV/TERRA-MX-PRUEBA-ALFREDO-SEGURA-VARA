<?php

include_once '../interfaces/ControllerInterface.php';
class TaskController implements Controller{


    static function index()
    {
       include "../../routes/web.php";
    }

    static function show($id)
    {
        // TODO: Implement show() method.
    }

    static function create()
    {
        // TODO: Implement create() method.
    }

    static function store($data)
    {
        // TODO: Implement store() method.
    }

    static function edit($id)
    {
        // TODO: Implement edit() method.
    }

    static function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }
}