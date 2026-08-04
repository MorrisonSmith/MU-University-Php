<?php

// Start the session
session_start();


// ------------------------------------
// LOGOUT
// ------------------------------------

if (isset($_GET['logout'])) {

    // Remove all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the same page
    header("Location: login_session.php");
    exit();
}


// ------------------------------------
// LOGIN
// ------------------------------------

if (isset($_POST['login'])) {

    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check username and password
    if ($username == "admin" && $password == "1234") {

        // Store username in session
        $_SESSION['username'] = $username;

        // Redirect to home page
        header("Location: login_session.php");
        exit();

    } else {

        // Error message
        $error = "Invalid username or password.";

    }
}


// ------------------------------------
// CHECK LOGIN
// ------------------------------------

$logged_in = isset($_SESSION['username']);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Login Session</title>

</head>

<body>

<?php

// ------------------------------------
// HOME PAGE
// ------------------------------------

if ($logged_in) {

?>

    <h2>Home Page</h2>

    <p>
        Welcome
        <b><?php echo $_SESSION['username']; ?></b>
    </p>

    <p>You have successfully logged in.</p>

    <a href="login_session.php?logout=1">
        Logout
    </a>

<?php

} else {


// ------------------------------------
// LOGIN FORM
// ------------------------------------

?>

    <h2>Login Form</h2>

    <?php

    // Display error message
    if (isset($error)) {

        echo "<p>$error</p>";

    }

    ?>

    <form method="post">

        Username:
        <input
            type="text"
            name="username"
            required
        >

        <br><br>

        Password:
        <input
            type="password"
            name="password"
            required
        >

        <br><br>

        <input
            type="submit"
            name="login"
            value="Login"
        >

    </form>

<?php

}

?>

</body>
</html>