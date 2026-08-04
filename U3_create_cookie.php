<?php

// Check whether form is submitted
if (isset($_POST['submit'])) {

    // Get username from form
    $username = $_POST['username'];

    // Create cookie
    // Cookie will remain for 1 hour
    setcookie("username", $username, time() + 3600, "/");

    echo "Cookie created successfully.";

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form method="post">

    Enter Username:
    <input type="text" name="username" required>

    <br><br>

    <input type="submit" name="submit" value="Create Cookie">

</form>

</body>
</html>