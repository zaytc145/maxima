<?php

namespace Zayts\Hw6;

use Zayts\Hw6\Models\User;

class Auth
{
    public static function check()
    {
        return Cookie::get('user_id') ? true : false;
    }

    public static function setCookie($user_id)
    {
        return Cookie::set('user_id', $user_id);
    }

    public static function user() {
        return User::find(Cookie::get('user_id'));
    }
}
