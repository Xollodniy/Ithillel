<?php
$inputArr = [11,2,3,4,1,2,5,6,7];
$numbers = array_count_values($inputArr);
$result = null;
        foreach ($numbers as $number => $val) {
            if($val > 1){
                $result = 'YES';
                break;
            } else{
                $result = 'NO';
            }
        }
        echo $result;


