<?php
$degrees = random_int(0,360);
$hours = (int)($degrees/30);
$minutes = ($degrees * 2)%60;

echo "Пройшлo $hours год. , $minutes хвилин";