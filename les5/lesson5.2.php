<!-- Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация, поэтому необходимо добавить соответствующее свойство и методы классу Task. -->

<?php

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

class TaskService
{
    public static function addComment(User $user, Task $task, string $text) : void
    {
        $comment = new Comment($user, $task, $text);
        $task->addComment($comment);
    }
}

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

public function __construct(User $author, Task $task, string $text)
{
    $this->author = $author;
    $this->task = $task;
    $this->text = $text;
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

    private array $comments;



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

    public function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s'); 
    }

    public function addComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }
}


$user = new User('Petr', 'Petr@mail.ru');
$task = new Task($user, 1, 'little');
$task->setDescription('NewDescription');
$task->markAsDone();

$user2 = new User('Victor', 'Victor@mail.ru');
TaskService::addComment($user2,$task, 'trampampam');
var_dump($task);