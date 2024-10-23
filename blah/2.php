<?php
/*
Write a PHP script to count the instances of words in a string using the function
preg_match_all().
*/
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione rem repellat, repellendus aliquam similique tempora deserunt asperiores nemo corrupti quis totam velit tenetur, deleniti nobis! Nobis vitae ea voluptas earum!";
    $pattern = '/\b\w+\b/';

    if (preg_match_all($pattern, $str, $matches)){
        print_r($matches);  
    }
?>