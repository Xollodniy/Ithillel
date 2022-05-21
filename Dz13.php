<?php
$year = random_int(1000,9999);
$month = random_int(1,12);
$days = random_int(1,31);

echo $year . '-' . $month . '-' . $days;
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
echo 'Місяць: ' . $month . '('. $monthName . ')'. PHP_EOL;
echo 'День: ' . $days . PHP_EOL;