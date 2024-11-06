<!-- Подготовьте массив целых чисел (4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2). Разработайте анонимную функцию для применения в качестве аргумента array_map, возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное». Для проверки четности числа используйте деление по модулю (%); -->

<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$checkNum = array_map(
    function (int $number) {
        $check = $number % 2;
        if ($check == 0) {
            $check = $number . ' - четное число'.PHP_EOL;
        } else
            $check = $number . ' - нечетное число'.PHP_EOL;
        print($check);
    },
    $numbers
);