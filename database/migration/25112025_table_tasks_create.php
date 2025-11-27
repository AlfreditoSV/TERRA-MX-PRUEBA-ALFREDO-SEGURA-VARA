<?php

include_once __DIR__.'/../../config/connection_database.php';

class TableTasksCreate extends ConnectionDatabase {

//Creacion de la tabla tasks
    public function create()
    {
        $connect = self::connection();
        try {
            $sql = 'CREATE TABLE IF NOT EXISTS tasks(
    id INT NOT NULL AUTO_INCREMENT,
    task_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    INDEX (task_name (10))
    )';
            $connect->exec($sql);

        }catch (Exception $e){
            die ('Error:'.$e->getMessage());
        }

    }

}