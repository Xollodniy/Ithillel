<?php
$number = random_int(1000, 9999);
$a = $number / 1000;
$first = $a % 10;
$second = ($number / 100) % 10;
$third = ($number / 10) % 10;
$four = $number % 10;

$result = $first + $second + $third + $four;
echo $result;