<?php

function quick_sort($unsorted_array){
    if(count($unsorted_array) <= 1){
        return $unsorted_array;
    }
    else{
        $pivot = $unsorted_array[0];
        $unsorted_array = array_splice($unsorted_array,1);
        $left = array();
        $right = array();
        foreach($unsorted_array as $value){
            if ($value <= $pivot){
                array_push($left, $value);
            }
            else{
                array_push($right, $value);
            }
        }
        return array_merge(quick_sort($left), array($pivot), quick_sort($right));
    }
}
?>