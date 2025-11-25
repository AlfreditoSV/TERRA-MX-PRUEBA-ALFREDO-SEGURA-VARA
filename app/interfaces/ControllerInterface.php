<?php

interface Controller{
    static function index();
    static function show($id);
    static function create();
    static function store($data);
    static function edit($id);
    static function update($id, $data);
    static function delete($id);
}