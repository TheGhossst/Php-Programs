<?php
    $arr = array("123", 1, "dum", false);

    array_push($arr, 2); // push to end of the array
    array_pop($arr);     //pop element at the end of the array
    array_shift($arr);   // pop element at the start of the array
    $len = count($arr);  // count the number of elements of the array

    $sorted_arr = sort($arr);

    echo "Len of the array is = {$len} <br>";

    echo "The elements of the array are: ";
    foreach($arr as $items)
        echo "{$items},  "
?>