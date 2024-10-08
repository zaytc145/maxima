<?php

//Реализация паттерна фабрика
class TodoServiceFactory
{
    public static function create($type): TodoService
    {
        return match ($type) {
            TodoService::class => TodoServiceImp::getInstance(),
            default => null
        };
    }
}
