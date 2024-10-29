<?php

namespace Zayts\Hw6\Models;

class User extends Model
{
    protected static $table = 'users';

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
}
