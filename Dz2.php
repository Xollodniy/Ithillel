<?php
$a = 10;
$b = 40;

echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;

$c = $a;
$a = $b;
$b = $c;


echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;