<?php
    //key=> value pair
    $arr = array("Apple" => "Red", "Banana" => "Yellow");
    
    echo "{$arr["Apple"]} <br>";

    foreach($arr as $key => $value){
        echo "Key: $key, Value: $value <br>";
    }

    $keys = array_keys($arr);

    foreach($keys as $key)
        echo "Key = $key <br>";

    
    arsort($arr);
    foreach($arr as $key => $val){
        echo "Key: $key, Value: $val <br>";
    }
        
?>