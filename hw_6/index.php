<?php
require __DIR__ . '/vendor/autoload.php';

use Zayts\Hw6\DB\Database;

$result = Database::getConnection()->execute("select * from users")->fetchAll();
