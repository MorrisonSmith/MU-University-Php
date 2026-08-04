<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<?php

// Check whether form is submitted
if (isset($_POST['register'])) {

    // Connect to database
    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "studentdb"
    );

    // Check database connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Get form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashed_password = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    // SQL query
    $sql = "INSERT INTO users
            (name, email, username, password)
            VALUES
            ('$name', '$email', '$username', '$hashed_password')";

    // Execute query
    if (mysqli_query($conn, $sql)) {

        echo "<p>Registration successful!</p>";

    } else {

        echo "<p>Error: " . mysqli_error($conn) . "</p>";

    }

    // Close connection
    mysqli_close($conn);
}

?>

<form method="post">

    Name:
    <input type="text" name="name" required>

    <br><br>

    Email:
    <input type="email" name="email" required>

    <br><br>

    Username:
    <input type="text" name="username" required>

    <br><br>

    Password:
    <input type="password" name="password" required>

    <br><br>

    <input
        type="submit"
        name="register"
        value="Register"
    >

</form>

</body>
</html>