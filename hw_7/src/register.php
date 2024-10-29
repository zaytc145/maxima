<?php

require __DIR__ . '/../vendor/autoload.php';

use Zayts\Hw6\Models\User;

$user = User::create([
    'first_name' => $_POST['firstName'],
    'last_name' => $_POST['lastName'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

header("Location: http://127.0.0.1:9000/index.php?user_id=$user->id");