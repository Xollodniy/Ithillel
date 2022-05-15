<?php
$finger = random_int(1,5);
if($finger === 1){
    echo 'Великий палець';
} elseif ($finger === 2){
    echo 'Вказівний палець';
} elseif ($finger === 3){
    echo 'Середній палець';
} elseif ($finger === 4){
    echo 'Безіменний палець';
} elseif ($finger === 5){
    echo 'Мізинець';
} else{
    echo 'Де пальці?';
}