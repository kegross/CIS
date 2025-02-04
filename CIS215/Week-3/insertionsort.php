<?php


function insertion_sort($unsorted_array){
    if (count($unsorted_array) <= 1){
        return $unsorted_array;
    }
    else{
        $sorted_array = array($unsorted_array[0]);
        for($index=1; $index < count($unsorted_array); $index++){
            $current_item = $unsorted_array[$index];
            for($sorted_index=0; $sorted_index <= count($sorted_array); $sorted_index++){
                if ($sorted_index == count($sorted_array)){
                    $sorted_array = array_merge($sorted_array, array($current_item));
                    break;
                }
                elseif ($current_item <= $sorted_array[$sorted_index]){
                    $sorted_array = array_merge(array_slice($sorted_array, 0, $sorted_index), array($current_item), array_slice($sorted_array, $sorted_index));
                    break;
                }
            }
        }
        return $sorted_array;
    }
}

var_dump(insertion_sort(array(2,3,1,-2,5,0,-3)));


?>