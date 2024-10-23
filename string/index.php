<?php
    function capitalize($str){
        return strtoupper($str);
    }

    function lowerize($str){
        return strtolower($str);
    }

    function findlen($str){
        return strlen($str);
    }

    if (isset($_POST['submit'])){
        $str = $_POST['str'];
        $cap = capitalize($str);
        $low = lowerize($str);
        $len = findlen($str);

        echo "<div style = 'display : block;color: blue;'>
                <p>The string in all caps is {$cap}</p>
                <p>The string in all lowercase is {$low}</p>
                <p>The length of the string is {$len}</p>
               </div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>foree</title>
</head>
<body>
    <form action = 'index.php' method = 'post'>
        <input type = 'text' name = 'str' placeholder = 'Enter a string'/>
        <input type = 'submit' name = 'submit' value = 'Submit'/>
    </form>
</body>
</html>