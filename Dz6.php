<?php
$cardNumber = random_int(6,14);


    if($cardNumber<= 10){
        echo $cardNumber;
        }
    elseif ($cardNumber === 11){
        echo 'Валет';
    }
    elseif ($cardNumber === 12){
        echo 'Дама';
    }
    elseif ($cardNumber === 13){
        echo 'Король';
    }
    elseif ($cardNumber === 14){
        echo 'Туз';
    }
    else {
        echo 'None';
    }


