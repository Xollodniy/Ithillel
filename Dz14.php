<?php
$arr = [1, 10, 1, 1, 1, 10, 10, 10];
$min = min($arr);
$max = max($arr);
$newArrMin = array();
$newArrMax = array();
foreach ($arr as $key => $val) {
    if ($val == $min) {
        $newArrMin[] = $val;

    }
}
$minResult = count($newArrMin);

foreach ($arr as $key => $val) {
    if ($val == $max) {
        $newArrMax[] = $val;

    }
}
$maxResult = count($newArrMax);
echo 'Мінімальне число = ' . $min . ', зустрічається раз - ' . $minResult . PHP_EOL;
echo 'Максимальне число = ' . $max . ', зустрічається раз - ' . $maxResult . PHP_EOL;

