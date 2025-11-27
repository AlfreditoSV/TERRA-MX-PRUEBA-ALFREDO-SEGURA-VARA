<?php

include_once __DIR__ . "/../../../../config/connection_database.php";
class PostAccessors extends ConnectionDatabase
{
    //Metodo para insertar datos en la tabla especificada
    public static function create(array $data, string $table){

        $columns="";
        $params="";
        foreach($data as $key => $value){
            $columns.=$key.",";
            $params.=":".$key.",";
        }
        $columns=substr($columns,0,-1);
        $params=substr($params,0,-1);
        $connect=self::connection();
        $sql = "INSERT INTO $table ($columns) VALUES ($params)";
        $stmt = $connect->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindParam(":".$key,$value);
        }
        if($stmt->execute()){
            return [
                'status'=>'success',
                'last_id'=>$connect->lastInsertId()
            ];

        }else{
            return [
                'status'=>'error',
                'message'=>self::connection()->errorInfo()
            ];
        }

    }

//Metodo para actualizar datos en la tabla especificada
    public static function update(string $id,array $data, string $table){

        $validate_id=GetAccessor::getById($id,$table);
        if(empty($validate_id))return[
            'status'=>'error',
            'message'=>'Record not found'
        ];
        $values="";
        foreach($data as $key => $value){
            $values.=$key."=:".$key.",";
        }
        $values=substr($values,0,-1);
        $sql = "UPDATE $table SET $values WHERE id=:id";
        $stmt = self::connection()->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindParam(":".$key,$value);
        }
        $stmt->bindParam(":id",$id);
        if($stmt->execute()){
            return [
                'status'=>'success',
            ];

        }else{
            return [
                'status'=>'error',
                'message'=>self::connection()->errorInfo()
            ];
        }

    }
}