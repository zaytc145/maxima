<?php

// Класс Todo представляет собой задачу, которую пользователь может добавить
class Todo
{
    private int $id; // Уникальный идентификатор задачи
    private int $userId; // ID пользователя, которому принадлежит задача
    private string $title; // Заголовок задачи
    private string $description; // Описание задачи
    private Status $status; // Статус задачи
    private DateTime $dueDate; // Срок выполнения задачи

    public function __construct(int $id, int $userId, string $title, string $description, Status $status, DateTime $dueDate)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->dueDate = $dueDate;
    }

    // Метод для получения заголовка задачи
    public function getTitle(): string
    {
        return $this->title;
    }

    // Метод для изменения заголовка задачи
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    // Метод для изменения статуса задачи
    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    // Другие методы для работы с задачей, например, изменения описания, срока и т.д.
}
