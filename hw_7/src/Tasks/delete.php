<?php

require __DIR__ . '/../../vendor/autoload.php';

use Zayts\Hw6\Models\Task;

$userId = $_GET['user_id'];
$taskId = $_GET['task_id'];

$task= Task::find($taskId);
$task->delete();

header("Location: http://127.0.0.1:9000/index.php?user_id=$userId");


