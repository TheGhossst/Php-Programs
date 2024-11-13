<?php
    /*Write a PHP form handling program to verify the user authentication credentials
    of a web page using MySQL connection and store the userid value as a Session
    variable if the userid is valid*/
    session_start();
    if (isset($_POST['submit'])){
        echo "Hi";
        if (!preg_match('/^[a-zA-Z ]*$/', $_POST['name'])){
            echo "Pattern not matching";
        }
        else{
            $name = $_POST['name'];
            $age = $_POST['age'];

            echo "$name = $age"; 

            $server = 'localhost';
            $username = 'root';
            $password = 'Boomer123';
            $db = 'web';

            $conn = mysqli_connect($server, $username, $password, $db);
            if (!$conn) {
                echo "Connection failure";
            }
            else{
                $sql = "SELECT * from PERSON WHERE NAME = '$name' and AGE = '$age'";

                if ($res = mysqli_query($conn, $sql)){
                    $count = mysqli_num_rows($res);
                    if ($count == 0){
                        echo "<script>alert('Person not found')</script>";
                    }
                    else{
                       $row = mysqli_fetch_assoc($res);
                       //$row = mysqli_fetch_row($res);
                       //$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
                       $name_row = $row['name'];
                        echo "<script>alert('Hi $name_row')</script>";
                        $_SESSION['username'] = $name_row;
                    }
                }
                mysqli_close($conn);
            }
        }    
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Nandu">
        <title>FROMF</title>
        <style>
            label {
                font-size: 14px;
                margin-bottom: 8px;
                display: block;
                color: #555;
            }
            input {
                width: 90%;
                padding: 10px;
                margin: 8px 0 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }
        </style>
    </head>
    <body style = 'font-family: Arial, sans-serif;background-color: #f4f4f4;margin: 0;padding: 0;display: flex;justify-content: center;align-items: center;height: 100vh;' >
        <form action="validate.php" method="post" style = ' background-color: white;padding: 20px;border-radius: 8px;width: 300px;'>
            <h1 style = 'text-align: center;color: black;'>Formsq</h1>
            <label for="name">Enter name</label>
            <input type="text" name="name" required />

            <label for="age">Enter age</label>
            <input type="number" name="age" min="0" required />

            <button type="submit" name = 'submit' value = 'submit' style = 'width: 100%;padding: 10px;background-color: #4CAF50;border: none;color: white;font-size: 16px;border-radius: 4px;cursor: pointer;'>Submit</button>
        </form>
    </body>
</html>
