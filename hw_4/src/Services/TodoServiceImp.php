<?php

// в классе TodoServiceImp реализован паттер Singleton
class TodoServiceImp implements TodoService
{
    private static TodoServiceImp $instance;

    private function __construct()
    {
    }

    public static function getInstance(): TodoServiceImp
    {
        if (self::$instance == null) {
            self::$instance = new TodoServiceImp();
        }

        return self::$instance;
    }
}
