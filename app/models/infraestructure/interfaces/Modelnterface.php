<?php

interface Model
{

    static function get();

    static function getById(string $id);

    static function insert(array $data);

    static function update(array $data);

    static function delete(string $id);


}