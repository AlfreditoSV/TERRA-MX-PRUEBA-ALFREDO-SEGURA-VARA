<?php

//Definicion de la interfaz Controller con los metodos basicos para el manejo de peticiones HTTP
interface Controller{
    public function index();
    public function show($id);
    public function store($data);
    public function update($id, $data);
    public function delete($id);
}