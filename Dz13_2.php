<?php
$inputDate = '2023-07-27';
$arr = explode('-', $inputDate);
$year = $arr[0];
$month = (int)$arr[1];
$day = $arr[2];
    $monthName = match ($month) {
        1 => 'Січень',
        2 => 'Лютий',
        3 => 'Березень',
        4 => 'Квітень',
        5 => 'Травень',
        6 => 'Червень',
        7 => 'Липень',
        8 => 'Серпень',
        9 => 'Вересень',
        10 => 'Жовтень',
        11 => 'Листопад',
        12 => 'Грудень'
    };
echo PHP_EOL;
echo 'Рік: ' . $year . PHP_EOL;
echo 'Місяць: ' . $month . '(' . $monthName . ')' . PHP_EOL;
echo 'День: ' . $day . PHP_EOL;



