<?php

require __DIR__ . '/../vendor/autoload.php';

use Zayts\Hw6\Models\User;

$email = $_POST['email'];
$password = $_POST['password'];

$user = User::where(
    'email', $email,
)[0];

if ($user->password === $password) {
    header("Location: http://127.0.0.1:9000/index.php?user_id=$user->id");
    return;
}
header("Location: http://127.0.0.1:9000/login.php");

