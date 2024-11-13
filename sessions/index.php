<?php
session_start(); 

if (!isset($_SESSION['page_access_count'])) {
    $_SESSION['page_access_count'] = 0;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location: home.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../test/styles.css">
</head>

<body>
    <div class="form-container">
        <h2>login page</h2>
        <form action="index.php" method="post">
            <div class="input-group">
                <label for="fname">Username</label>
                <input type="text" id="fname" name="username" placeholder="Enter your Username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <input type="submit" name='submit' class="submit-btn" style="background: linear-gradient(90deg, #ff7e5f, #feb47b); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;" />
        </form>
    </div>
</body>

</html>