<?php 

$array1 = ['счастья','здоровья','добра','достатка','веселья','настроения','благополучия','уюта'];
$array2 = ['крепкого','вечного','прекрасного','приятного','солнечного','яркого','космического', 'незабываемого'];
$name = readline('Введите ваше имя: ');
$congrat = "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ";
for ($i=0;$i<3;$i++) {
    $array2index = array_rand($array2);
    $array1index = array_rand($array1);
    $congrat = $congrat . $array2[$array2index] . ' ' . $array1[$array1index] . ', ';
    unset($array1[$array1index]);
    unset($array2[$array2index]);
}

echo (substr($congrat, 0, -2) . '!');