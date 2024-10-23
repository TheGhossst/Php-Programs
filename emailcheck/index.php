<?php

function isValidEmail($email) {
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false;
    }
}


if (isset($_POST['email'])){
    $emailToTest =$_POST['email'];
    if (isValidEmail($emailToTest)) {
        echo "<div style='color: green; font-weight: bold;'>$emailToTest is a valid email address.</div>";
    }
    elseif ($emailToTest == null) echo "";
    else {
        echo "<div style='color: red; font-weight: bold;'>$emailToTest is not a valid email address.</div>";
    }

}
else{
    echo "Enter a email";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = 'stylesheet' href = '../test/styles.css'>
</head>
<body>
    <form action = 'index.php' method = post>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" >
            <input type = 'submit' name = 'submit'>
        </div>
    </form>
</body>
</html>