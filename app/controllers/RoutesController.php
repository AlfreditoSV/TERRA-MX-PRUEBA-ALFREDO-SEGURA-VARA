<?php

include_once __DIR__ . '/interfaces/ControllerInterface.php';
class RoutesController implements Controller
{
    public function index()
    {
        include __DIR__."/../../routes/web.php";
    }

    public function show($id)
    {
    }

    public function store($data)
    {
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}