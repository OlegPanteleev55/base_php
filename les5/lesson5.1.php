<?php

//Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User). В качества класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.

class User
{
    private string $username;
    private string $email;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}

class Task
{
    private User $user;
    private int $priority;
    private string $description;

    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;

    private bool $isDone = false;



    function __construct(User $user, int $priority, string $description)
    {
        $this->user = $user;
        $this->priority = $priority;
        $this->description = $description;
        $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s'); 
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = date('Y-m-d H:i:s');
    }

    function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s'); 
    }
}


$user = new User('Petr', 'Petr@mail.ru');
$task = new Task($user, 1, 'little');
sleep(1);
$task->setDescription('NewDescription');
sleep(1);
$task->markAsDone();
var_dump($task);
