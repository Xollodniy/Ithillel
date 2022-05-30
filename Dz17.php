<?php
$arr = [10, -20, -30, 40, 50, -60, -70, 80, -75];
    foreach ($arr as $key => $value){
        if($arr[$key] < 0) {
            $arr[$key] = -1 * $arr[$key];
        }
        }
print_r($arr);