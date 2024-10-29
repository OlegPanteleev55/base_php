<?php

while (true) {

    $answer = (int) readline("В каком году Александр 1 взошел на пост правления руси? Варианты ответа:1801, 1809, 1799." . PHP_EOL);

    if ($answer === 1809) {
        echo "неправильный ответ";
        break;
    }

    if ($answer === 1799) {
        echo "неправильный ответ";
        break;
    }

    if ($answer === 1801) {
        echo "правильный ответ";
        break;
    }
}
