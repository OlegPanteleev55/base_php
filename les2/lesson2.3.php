<?php

$num = (int) readline("Введите положительное число: ");
if ($num > 0) {
    switch ($num % 8) {

        case 1:
            echo 'Большой';
            break;

        case 0:
        case 2:
            echo 'Указательный';
            break;

        case 3:
        case 7:
            echo 'Средний';
            break;

        case 4:
        case 6:
            echo 'Безымянный';
            break;

        case 5:
            echo 'Мизинец';
            break;
    }
} else {
    echo 'Вы ввели неверное значение';
}
