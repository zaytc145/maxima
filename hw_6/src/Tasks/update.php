<?php

require __DIR__ . '/../../vendor/autoload.php';

use Zayts\Hw6\Models\Task;

$taskId = $_GET['task_id'];

$task = Task::find($taskId);
$task->update([
    'title' => $_POST['title'],
    'description' => $_POST['description'],
]);

$userId = $_GET['user_id'];

header("Location: http://127.0.0.1:9000/index.php?user_id=$userId");


