<?php

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($array1); $i++) {
    $mul[$i] = $array1[$i] * $array2[$i];
}
print_r($mul);
