<?php
/*if (isset($_POST['submit'])){
        echo $_POST['first_name'];
    }*/


if (isset($_POST['submit'])) {
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    //echo "<script> alert('$first_name'); </script>";
    echo $first_name . "<br>";

    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    
    if (empty($age)){
        echo "Please enter a valid age. <br>";
    }
    else{
        echo "Age is $age <br>";
    }

    if (strcmp($_POST['password'], $_POST['confirm_password']) == 0){
        echo "Password and Confirm Password are the same.";
    }
    else{
        echo "error";
    }
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
        <h2>Forum</h2>
        <form action="index.php" method="post">
            <div class="input-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="first_name" placeholder="Enter your first name" required>
            </div>
            <div class="input-group">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" placeholder="Enter your age" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
            </div>
            <div class="input-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit" name="submit" class="submit-btn">Register</button>
        </form>
    </div>
</body>

</html>