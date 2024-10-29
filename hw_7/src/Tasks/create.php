<?php

require __DIR__ . '/../../vendor/autoload.php';

use Zayts\Hw6\Models\Task;

Task::create([
    'title' => $_POST['title'],
    'description' => $_POST['description'],
]);

$userId = $_GET['user_id'];

header("Location: http://127.0.0.1:9000/index.php?user_id=$userId");


