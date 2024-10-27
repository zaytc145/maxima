<?php

namespace Zayts\Hw6\Models;

class Task extends Model
{
    protected static $table = 'tasks';

    public $id;
    public $title;
    public $description;

}
