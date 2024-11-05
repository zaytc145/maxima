<?php

require __DIR__ . '/../../vendor/autoload.php';

use Zayts\Hw6\Models\Task;

$isAuth = \Zayts\Hw6\Auth::check();
if (!$isAuth) {
    return redirect("/login.php");
}

Task::create([
    'title' => $_POST['title'],
    'description' => $_POST['description'],
]);

$userId = \Zayts\Hw6\Auth::user()->id;

redirect("/index.php");


