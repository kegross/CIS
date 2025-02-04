<?php

function sieve($max){
    $numbers = array();
    for($number=2;$number<=$max;$number++){
        $numbers[$number] = True;
    }
    foreach($numbers as $number => $is_prime){
        if($is_prime){
            $count = 2;
            while($number*$count <= $max){
                $numbers[$number*$count] = False;
                $count++;
            }
        }
        if($number > sqrt($max)){
            break;
        }
    }
    return $numbers;
}

function print_sieve($number_array){
    foreach($number_array as $number => $is_prime){
        if($is_prime){
            echo $number;
            echo " ";
        }
    }
}

function main(){
    $finished_sieve = sieve(1000);
    print_sieve($finished_sieve);
}

main();

?>