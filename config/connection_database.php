<?php

include_once __DIR__.'/../database/migration/25112025_table_tasks_create.php';
class ConnectionDatabase
{

    public static function info()
    {
        return [
            'host'=>'localhost',
            'database'=>'db_terra',
            'username'=>'root',
            'password'=>'',
            'charset'=>'utf8mb4'
        ];

    }

    public static function connection(){
        try{

            $host=self::info()['host'];
            $db=self::info()['database'];
            $charset=self::info()['charset'];

          $pdo= new PDO(
              "mysql:host={$host};dbname={$db}",
              self::info()['username'],
              self::info()['password'],
              [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              ]
          );

        }catch(PDOException $error){
            die('Error: ' . $error->getMessage());
        }

        return $pdo;

    }

  public static function migration(){
        $table=new TableTasksCreate();
        return $table->create();
  }



}