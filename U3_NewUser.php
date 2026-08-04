<?php

// Check whether visitor cookie exists
if (isset($_COOKIE['visitor'])) {

    // Existing visitor
    echo "<h2>Welcome back!</h2>";
    echo "You are a repeated visitor.";

} else {

    // Create visitor cookie
    setcookie("visitor", "yes", time() + (86400 * 30), "/");

    echo "<h2>Welcome!</h2>";
    echo "You are a new visitor.";

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Cookie</title>
</head>
<body>

</body>
</html>