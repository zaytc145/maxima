<?php

// Класс User отвечает за управление пользователями в системе
class User
{
    private int $id; // Уникальный идентификатор пользователя
    private string $name; // Имя пользователя
    private string $email; // Электронная почта пользователя
    private string $password; // Хэш пароля пользователя

    public function __construct(int $id, string $name, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Метод для получения имени пользователя
    public function getName(): string
    {
        return $this->name;
    }

    // Метод для установки имени пользователя
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
