<?php
$str = 'радар';
  function strrev_enc($str): string{
    $str = iconv('utf-8', 'windows-1251', $str);
    $str = strrev($str);
    $str = iconv('windows-1251', 'utf-8', $str);
    return $str;
}
$result = strrev_enc($str);
        if($str === $result){
            echo 'Palindrome';
        } else{
            echo 'NOT Palindrome';
        }