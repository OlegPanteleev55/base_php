<?php

$totalTime = 0;
$work = '';
$time = 0;

    $taskCount = (int) readline('Сколько задач вы планируете сегодня?');
    if ($taskCount > 0 ) {
        for ($i=0; $i<$taskCount; $i++) {
            $work = $work . readline("чем ты планируешь сегодня заняться? \n" . PHP_EOL);
            $time = readline("А сколько оно займет времени?   " . PHP_EOL);
            $totalTime = (int) $totalTime + $time;
        }
    }

echo "У вас сегодня $taskCount заданий:
    -$work
    Общее время выполнения $totalTime";
