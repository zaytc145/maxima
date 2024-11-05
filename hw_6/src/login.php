<?php

require __DIR__ . '/../vendor/autoload.php';

use Zayts\Hw6\Models\User;

$isAuth = \Zayts\Hw6\Auth::check();
if ($isAuth) {
    return redirect("/index.php");
}

$email = $_POST['email'];
$password = $_POST['password'];

$user = User::where(
    'email', $email,
)[0];

if ($user->password === $password) {
    \Zayts\Hw6\Auth::setCookie($user->id);
    redirect("/index.php");
    return;
}

redirect("/login.php");

