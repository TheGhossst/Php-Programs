<?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    //echo "Welcome {$fname} {$lname} <br>";
    //echo "Your email is {$email}"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style = "background-color: red;color:black;"><?php echo("Welcome $fname $lname") ?></p>
    <p><?php echo gettype( $fname)?></p>
</body>
</html>