<?php
    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'web';
    $sql = '';

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if (!$conn){
        echo "Error";
    }
    else{
        echo "Connected";
        $sql = "CREATE TABLE IF NOT EXISTS my_table (
            name VARCHAR(100) NOT NULL,
            password VARCHAR(100) NOT NULL
        )";

        if (mysqli_query($conn, $sql)) {
            echo "Table created successfully or already exists.";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['submit'])){
        $name = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO my_table (name, password) VALUES ('$name', '$pass')";

        if (mysqli_query($conn, $sql)) {
            echo "Row inserted successfully";
        } else {
            echo "Error inserting values: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    
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
            <input type="submit" name = 'submit' class="submit-btn" style="background: linear-gradient(90deg, #ff7e5f, #feb47b); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;" />
        </form>
    </div>
</body>
</html>
