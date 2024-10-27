<?php

class Model {
    public static function all() {
        return Database::getConnection()->query()->exec();
    }

    public static function find($id) {
        return Database::getConnection()->query()->exec();
    }

    public static function create($params) {
        return Database::getConnection()->query()->exec();
    }

    public function update($params) {
        return Database::getConnection()->query()->exec();
    }

    public function delete($id) {
        return Database::getConnection()->query()->exec();
    }
}
