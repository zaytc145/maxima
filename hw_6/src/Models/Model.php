<?php

namespace Zayts\Hw6\Models;

use Zayts\Hw6\DB\Database;

class Model
{
    protected static $table = "";

    public function __construct($fields)
    {
        foreach ($fields as $key => $value) {
            $this->__set($key, $value);
        }
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public static function all()
    {
        $table = static::$table;
        $results = Database::getConnection()->execute("select * from $table")->fetchAll();
        return static::mapToModel($results);
    }

    public static function find($id)
    {
        $table = static::$table;
        $task = Database::getConnection()->execute("select * from $table where id=$id")->fetch();
        return new static($task);
    }

    public static function where($field, $value)
    {
        $table = static::$table;
        $results = Database::getConnection()->execute(
            "select * from $table where $field = :value",
            [
                ':value' => $value
            ]
        )->fetchAll();

        return static::mapToModel($results);
    }

    public static function create($params)
    {
        $table = static::$table;
        $transformedParams = static::transformParams($params);
        $columns = $transformedParams['columns'];
        $values = $transformedParams['values'];
        Database::getConnection()->execute(
            "insert into $table ( $columns ) values ( $values )"
        );
        return static::find(Database::getConnection()->lastInsertId());
    }

    public function update($params)
    {
        $table = static::$table;
        $id = $this->id;

        $columns = array_keys($params);
        $placeholders = array_map(fn($key) => "$key = ?", $columns);
        $paramsString = implode(', ', $placeholders);

        Database::getConnection()->execute(
            "UPDATE $table SET $paramsString WHERE id = ?",
            [...array_values($params), $id]
        );

        return static::find($id);
    }

    public function delete()
    {
        $id = $this->id;
        $table = static::$table;
        return Database::getConnection()->execute("DELETE FROM $table WHERE id = $id");
    }

    private static function transformParams($params)
    {
        return [
            'columns' => implode(", ", array_keys($params)),
            'values' => implode(", ",
                array_map(fn($value) => "'" . addslashes($value) . "'", array_values($params))
            )
        ];
    }

    private static function mapToModel($results)
    {
        $mapped_results = [];
        foreach ($results as $result) {
            $mapped_results[] = new static($result);
        }
        return $mapped_results;
    }
}
