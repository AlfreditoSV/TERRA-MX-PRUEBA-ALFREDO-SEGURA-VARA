<?php

include_once __DIR__.'/infraestructure/interfaces/Modelnterface.php';
include_once __DIR__ . '/infraestructure/accesors/GetAccessor.php';
class TaskModel implements Model
{

    public $table = "tasks";

    static function get(): array
    {
        $table=new TaskModel();
        return GetAccessor::getAll($table->table);
    }

    static function getById(string $id){
        $table=new TaskModel();
        return GetAccessor::getById($id,$table->table);
    }

    static function update(array $data)
    {
        // TODO: Implement update() method.
    }
    static function insert(array $data)
    {
        // TODO: Implement create() method.
    }
    static function delete(string $id){
        // TODO: Implement
    }

}