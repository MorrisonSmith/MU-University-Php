<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>

<h2>Read Cookie</h2>

<?php

// Check whether cookie exists
if (isset($_COOKIE['username'])) {

    echo "Welcome, " . $_COOKIE['username'];

} else {

    echo "Cookie does not exist.";

}

?>

</body>
</html>