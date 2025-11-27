<?php

include_once __DIR__ . "/../../../../config/connection_database.php";

class DeleteAccessors extends ConnectionDatabase
{
//Metodo para eliminar datos en la tabla especificada
    public static function delete(string $id, string $table){
        $validate_id=GetAccessor::getById($id,$table);
        if(empty($validate_id))return[
            'status'=>'error',
            'message'=>'Record not found'
        ];

        $sql = "DELETE FROM $table WHERE id=:id";
        $stmt = self::connection()->prepare($sql);
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