<?php


include_once __DIR__ . "/../../../../config/connection_database.php";

class GetAccessor extends ConnectionDatabase
{
    public static function getAll(string $table): array
    {
        $sql = 'SELECT * FROM ' . $table;
        $stmt = ConnectionDatabase::connection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getById(string $id, string $table){
        $sql = 'SELECT * FROM ' . $table . ' WHERE id = :id';
        $stmt = ConnectionDatabase::connection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}