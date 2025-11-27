<?php

//Definicion de la interfaz Model con los metodos basicos para el manejo de datos
interface Model
{

    static function get();

    static function getById(string $id);

    static function insert(array $data);

    static function update(string $id,array $data);

    static function delete(string $id);


}