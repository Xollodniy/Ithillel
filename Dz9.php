<?php
$number = random_int(1000,9999);
$a = $number / 1000;
$thousands = $a % 10;
$hundreds = ($number / 100) % 10;
$dozens = ($number / 10) % 10;
$units = $number % 10;
$thousandsOne = null;
if ($thousands == 0) {
    echo '';
} else {
    $thousandsOne = match ($thousands) {
        1 => 'Одна тисяча',
        2 => 'Дві тисячі',
        3 => 'Три тисячі',
        4 => 'Чотири тисячі',
        5 => 'П\'ять тисяч',
        6 => 'Шість тисяч',
        7 => 'Сім тисяч',
        8 => 'Вісім тисяч',
        9 => 'Дев\'ять тисяч',
    };
}
$hundredsOne = null;
if ($hundreds == 0) {
    echo '';
} else {
    $hundredsOne = match ($hundreds) {
        1 => 'Сто',
        2 => 'Двісті',
        3 => 'Триста',
        4 => 'Чотириста',
        5 => 'П\'ятсот',
        6 => 'Шістсот',
        7 => 'Сімсот',
        8 => 'Вісімсот',
        9 => 'Дев\'ятсот',
    };
}
$dozensOne = null;
if ($dozens !== 1) {
    $dozensOne = match ($dozens) {
        0 => '',
        2 => 'Двадцять',
        3 => 'Тридцять',
        4 => 'Сорок',
        5 => 'П\'ятдесят',
        6 => 'Шістдесят',
        7 => 'Сімдесят',
        8 => 'Вісімдесят',
        9 => 'Дев\'яносто',
    };
    $unitsOne = null;
    if ($units == 0) {
        echo '';
    }else{
        $unitsOne = match ($units) {
            1 => 'Один',
            2 => 'Два',
            3 => 'Три',
            4 => 'Чотири',
            5 => 'П\'ять',
            6 => 'Шість',
            7 => 'Сім',
            8 => 'Вісім',
            9 => 'Дев\'ять',
        };
    }
    $unitsTwo = null;
} else {
         $unitsTwo = match ($units) {
            1 => 'Одинадцять',
            2 => 'Дванадцять',
            3 => 'Тринадцять',
            4 => 'Чотирнадцять',
            5 => 'П\'ятнадцять',
            6 => 'Шістнадцять',
            7 => 'Сімнадцять',
            8 => 'Вісімнадцять',
            9 => 'Дев\'ятнадцять',
    };
}
    if ($units === 1 && !isset($unitsTwo)){
        $dollar = 'доллар';
    }elseif ($units == 2 || $units == 3 || $units == 4 && !isset($unitsTwo)){
        $dollar ='долари';
    }else{
    $dollar = 'доларів';
}

echo $thousandsOne .' '. $hundredsOne .' '. $dozensOne.' '. $unitsOne.' '. $unitsTwo .' '. $dollar;
     //echo 'Відкрито досягнення - Taste of PAIN ';