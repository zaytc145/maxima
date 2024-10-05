<?php

// Класс Status отвечает за определение статуса задачи (например, "В процессе", "Выполнено", "Отложено")
class Status
{
    private string $name; // Название

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Метод для получения названия статуса
    public function getName(): string
    {
        return $this->name;
    }
}
