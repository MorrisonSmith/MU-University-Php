<?php

// Check if login form is submitted
if (isset($_POST['login'])) {

    // Get username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check login details
    if ($username == "admin" && $password == "1234") {

        // Check remember me
        if (isset($_POST['remember'])) {

            // Store username in cookie
            setcookie("remember_username", $username, time() + 3600, "/");

            // For classroom demonstration only.
            // Do NOT store real passwords this way in production.
            setcookie("remember_password", $password, time() + 3600, "/");
        }

        echo "Login successful.";

    } else {

        echo "Invalid username or password.";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

    Username:

    <input
        type="text"
        name="username"
        value="<?php
        if (isset($_COOKIE['remember_username'])) {
            echo htmlspecialchars($_COOKIE['remember_username']);
        }
        ?>"
        required
    >

    <br><br>

    Password:

    <input
        type="password"
        name="password"
        value="<?php
        if (isset($_COOKIE['remember_password'])) {
            echo htmlspecialchars($_COOKIE['remember_password']);
        }
        ?>"
        required
    >

    <br><br>

    <input type="checkbox" name="remember">

    Remember Me

    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>