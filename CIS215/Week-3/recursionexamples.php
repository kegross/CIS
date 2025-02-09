<?php

function fibonacci($n){
    if($n == 1 || $n == 2){
        return 1;
    }
    else{
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

function factorial($n){
    if($n == 1){
        return 1;
    }
    else{
        return $n*factorial($n-1);
    }
}

function count_digits($number){
    if($number / 10 < 1){
        return 1;
    }
    else{
        $new_number = floor($number / 10);
        return count_digits($new_number) + 1;
    }
}

?>