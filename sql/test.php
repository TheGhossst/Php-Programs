<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'Boomer123';
    $database = 'web';

    $conn = mysqli_connect($server, $username, $password, $database);

    if ($conn){
        if (isset($_POST['insert'])){
            $name = $_POST['name'];
            if (!preg_match('/^[a-zA-Z ]*$/', $name)){
                echo "<script>alert('invalid name')</script>";
            }
            else{
                $age = $_POST['age'];
                $sql = "INSERT INTO PERSON (NAME, AGE) VALUES ('$name', $age)";
                if (mysqli_query($conn, $sql)){
                    echo "<script>alert('Data inserted')</script>";
                }
                else{
                    echo "Error inserting data";
                }
            }
        }

        else if (isset($_POST['update'])){
            $name = $_POST['name'];
            if (!preg_match('/^[a-zA-Z ]*$/', $name)){
                echo "<script>alert('invalid name')</script>";
            }
            $age = $_POST['age'];

            $sql = "UPDATE PERSON SET age = '$age' where name = '$name'";
            if (mysqli_query($conn, $sql)){
                echo "<script>alert('Updated Successfully')</script>";
            }
            else{
                echo "Error updating data";
            }

        }

        else if (isset($_POST['delete'])){
            $name = $_POST['name'];
            if (!preg_match('/^[a-zA-Z ]*$/', $name)){
                echo "<script>alert('invalid name')</script>";
            }
            $age = $_POST['age'];

            $sql = "DELETE FROM PERSON WHERE NAME = '$name' and AGE = '$age'";

            if (mysqli_query($conn, $sql)){
                echo "<script>alert('Deleted Successfully')</script>";
            }
            else{
                echo "Error deleting data";
            }
        }

        else if (isset($_POST['select'])) {
            $sql = "SELECT * FROM PERSON";
        
            if ($res = mysqli_query($conn, $sql)) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
        
                    foreach ($rows as $row) {
                        foreach ($row as $column => $value) {
                            echo $column . ': ' . $value . '<br>';
                        }
                        echo '<hr>';
                    }
                } else {
                    echo 'No records found.';
                }
            
            }
        }
        mysqli_close($conn);
    }
    else{
        echo "Connection failed";
    }
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>Time</title>
    <style>
        .container {
            padding: 0;
            margin: 0;
            display: flex;
            width: 100vw;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .input-label {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .input-field {
            width: fit-content;
            margin-top: 5px;
            padding: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .button {
            background: green;
            border: 2px solid green;
            border-radius: 16px;
            font-size: 1.2rem;
            margin: 5px;
            padding: 5px 15px;
            color: white;
            cursor: pointer;
        }

        .button.update {
            background: blue;
            border-color: blue;
        }

        .button.delete {
            background: red;
            border-color: red;
        }

        .button.show {
            background: orange;
            border-color: orange;
        }
    </style>
</head>

<body>
    <form class='container' method='post' action=''>
        <label class='input-label' for='name-input'>Enter the name
            <input class='input-field' type='text' id='name-input' name='name'/>
        </label>
        <label class='input-label' for='age-input'>Enter the age
            <input class='input-field' type='number' id='age-input' name='age' min='0' />
        </label>
        
        <div>
            <button class='button' type='submit' name='insert' value='insert' id='insert-btn'>Insert</button>
            <button class='button update' type='submit' name='update' value='update' id='update-btn'>Update</button>
            <button class='button delete' type='submit' name='delete' value='delete' id='delete-btn'>Delete</button>
            <button class='button show' type='submit' name='select' value='show' id='show-btn'>Show</button>
        </div>
        
        <p id='result'></p>
    </form>
</body>

</html>
