<?php  
session_start();

$_SESSION['page_access_count']++;

echo "<h1 style='
        color: #4CAF50; 
        font-family: Arial, sans-serif; 
        font-size: 2.5rem; 
        text-align: center; 
        padding: 20px;'>
        Congrats on logging in, {$_SESSION["username"]}!
        <br>You have accessed this page {$_SESSION["page_access_count"]} times during this session.
    </h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = 'home.php' method = 'post'>
        <input type = 'submit' name = 'logout' value = 'logout'  style="background: linear-gradient(90deg, #ff7e5f, #feb47b); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;"/>
    </form>
</body>
</html>

<?php
    if (isset($_POST["logout"])){
        session_destroy();

        header("Location: index.php?message=logout");
        exit();
    }
?>