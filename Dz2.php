<?php
$a = 10;
$b = 40;

echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;

    if ($a === 10) {
        $a = 40;
    }
    if ($b === 40) {
        $b = 10;
    }

echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;