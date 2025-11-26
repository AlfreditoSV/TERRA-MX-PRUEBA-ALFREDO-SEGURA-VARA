<?php

interface Controller{
    public function index();
    public function show($id);
    public function create();
    public function store($data);
    public function edit($id);
    public function update($id, $data);
    public function delete($id);
}