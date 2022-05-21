<?php
$cardNumber = random_int(6,14);
$cards = [
    '6' => 'Шестірка',
    '7' => 'Сімка',
    '8' => 'Вісімка',
    '9' => 'Девять',
    '10' => 'Десять',
    '11' => 'Валет',
    '12' => 'Дама',
    '13' => 'Король',
    '14' => 'Туз'
];
    if ($cards[$cardNumber]){
        echo $cards[$cardNumber];
    } else {
        echo 'None';
    }

