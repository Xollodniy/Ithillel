<?php
$year = random_int(0, 9999);
if($year % 4 !== 0){
    echo "$year НЕ Високосний рік";
} elseif ($year % 100 === 0) {
    if($year % 400 === 0) {
        echo "$year Високосний рік";
    }
} else {
    echo "$year Високосний рік";
}

/*$year = random_int(0, 9999);       /* 2 Варіант. Який доцільніше?
    if($year % 4 === 0) {
        if ($year % 100 === 0) {
           if($year % 400 === 0){
               echo "$year Високосний рік";
           }
        } else {
            echo "$year Високосний рік";
        }
    } else {
        echo "$year НЕ Високосний рік";
    }*/