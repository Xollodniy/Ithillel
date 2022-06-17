<?php
$input = [5, 5, 1, 1, 3, 15, 13, 12];
$result = array();
for ($i = 0; $i < count($input); $i++) {
    for ($j = $i+1; $j < count($input); $j++) {
        if($input[$i] == $input[$j]){
            $result[] = $input[$i];
        }
  }
}
print_r($result);