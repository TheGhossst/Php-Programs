<?php
$errors = [];
$first_name = $last_name = $email = $password = $confirm_password = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // fd name
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($first_name)) {
        $errors[] = "First Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
        $errors[] = "Only letters and white spaces are allowed in First Name.";
    }

    // lasd name
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($last_name)) {
        $errors[] = "Last Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
        $errors[] = "Only letters and white spaces are allowed in Last Name.";
    }

    // email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif ($email === false) {
        $errors[] = "Invalid email format.";
    }

    // paswoed
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (!preg_match("/^[a-zA-Z!@#_$.,]{8,}$/", $password)) {
        $errors[] = "Password must be at least 8 characters long and contain letters and special characters.";
    }

    // confirm password
    if (empty($confirm_password)) {
        $errors[] = "Confirm Password is required.";
    } elseif ($confirm_password !== $password) {
        $errors[] = "Passwords do not match.";
    }

    // gender
    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    if (empty($errors)) {
        echo "<p>Form submitted successfully!</p>";
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
        
        <?php
        // Display validation errors if any
        if (!empty($errors)) {
            echo "<div class='errors'>";
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
            echo "</div>";
        }
        ?>

        <form action="index.php" method="post">
            <div class="input-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="first_name" placeholder="Enter your first name" value="<?php echo htmlspecialchars($first_name); ?>" required>
            </div>
            <div class="input-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="last_name" placeholder="Enter your last name" value="<?php echo htmlspecialchars($last_name); ?>" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" required>
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
                    <option value="male" <?php if ($gender == "male") echo "selected"; ?>>Male</option>
                    <option value="female" <?php if ($gender == "female") echo "selected"; ?>>Female</option>
                    <option value="other" <?php if ($gender == "other") echo "selected"; ?>>Other</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>
</body>
</html>