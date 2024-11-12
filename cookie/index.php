<?php
    //cookie
    setcookie("vinu", "bkurup", time() + 86400, '/');
    setcookie("ritin", "rhon", time() + 86400, '/');

    //$_COOKIE -> Super global variable

    foreach($_COOKIE as $key => $value){
        echo $key . " = " . $value . "<br>";
    }

    $_COOKIE['vinu'] = 'kurup';

    foreach($_COOKIE as $key => $value){
        echo $key . " = " . $value . "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

echo "Before deletion <br>";
foreach($_COOKIE as $key => $value){
    echo $key . " = " . $value . "<br>";
}

echo "After deletion <br>";
setcookie("vinu", "", time() - 60, "/");
foreach($_COOKIE as $key => $value){
    echo $key . " = " . $value . "<br>";
}
?>