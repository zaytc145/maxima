<?php

require __DIR__ . '/../vendor/autoload.php';

use Zayts\Hw6\Models\User;

$isAuth = \Zayts\Hw6\Auth::check();
if ($isAuth) {
    return redirect("/index.php");
}

$user = User::create([
    'first_name' => $_POST['firstName'],
    'last_name' => $_POST['lastName'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

\Zayts\Hw6\Auth::setCookie($user->id);
header("Location: http://127.0.0.1:9000/index.php");
