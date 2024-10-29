<?php

namespace Zayts\Hw6\DB;

class Database
{
    private static $connection;
    private \PDO $pdo;

    private function __construct()
    {
        $this->pdo = new \PDO(
            'pgsql:host=db;port=5432;dbname=postgres',
            'postgres',
            'postgres'
        );
    }

    public static function getConnection()
    {
        if (!self::$connection) {
            self::$connection = new Database();
        }

        return self::$connection;
    }

    public function execute($sql, $params = []): \PDOStatement
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($params);
        return $query;
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}
