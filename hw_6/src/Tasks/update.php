<?php

require __DIR__ . '/../../vendor/autoload.php';

use Zayts\Hw6\Models\Task;

$isAuth = \Zayts\Hw6\Auth::check();
if (!$isAuth) {
    return redirect("/login.php");
}

$taskId = $_GET['task_id'];

$task = Task::find($taskId);
$task->update([
    'title' => $_POST['title'],
    'description' => $_POST['description'],
]);

redirect("/index.php");


