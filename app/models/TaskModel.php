<?php

include_once __DIR__.'/infraestructure/interfaces/Modelnterface.php';
include_once __DIR__ . '/infraestructure/accesors/GetAccessor.php';
include_once __DIR__ . '/infraestructure/accesors/PostAccessors.php';
include_once __DIR__ . '/infraestructure/accesors/DeleteAccessors.php';
class TaskModel implements Model
{
 //Nombre de la tabla
    public $table = "tasks";

//Metodos de la interfaz Model para obtener datos de la tabla tasks
    static function get(): array
    {
        $table=new TaskModel();
        return GetAccessor::getAll($table->table);
    }
//Metodos de la interfaz Model para obtener datos por id de la tabla tasks
    static function getById(string $id){
        $table=new TaskModel();
        return GetAccessor::getById($id,$table->table);
    }
//Metodos de la interfaz Model para insertar datos de la tabla tasks
    static function insert(array $data)
    {
        $table=new TaskModel();
        return PostAccessors::create($data,$table->table);
    }
//Metodos de la interfaz Model para actualizar datos de la tabla tasks
    static function update(string $id,array $data)
    {
        $table=new TaskModel();
        return PostAccessors::update($id,$data,$table->table);
    }
//Metodos de la interfaz Model para eliminar datos de la tabla tasks
    static function delete(string $id){
        $table=new TaskModel();
        return DeleteAccessors::delete($id,$table->table);
    }

}