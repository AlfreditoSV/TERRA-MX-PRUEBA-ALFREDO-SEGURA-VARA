<?php

include_once __DIR__.'/../interfaces/ControllerInterface.php';
class RoutesController implements Controller
{
    public function index()

    {
        include __DIR__."/../../routes/web.php";
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($data)
    {
        // TODO: Implement store() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}