<?php

// Разработайте функцию с объявленными типами аргументов и возвращаемого значения, принимающую в качестве аргумента массив целых чисел. Результатом работы
// функции должен быть массив, содержащий три элемента: max — наибольшее число, min — наименьшее число, avg — среднее арифметическое всех чисел массива;

$inputArray = [];
for ($i = 0; $i < 10; $i++) {
    $inputArray[$i] = random_int(1, 50);
}

function maxMinAvg(array $array): array{

    return [
    'max' => max($array),
    'min' => min($array),
    'avg' => array_sum($array) / count($array),
    ];
}
    
print_r(maxMinAvg($inputArray));
