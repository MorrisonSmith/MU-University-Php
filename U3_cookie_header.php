<?php

// Check whether cookie exists
if (isset($_COOKIE['username'])) {

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();

} else {

    echo "Cookie not found.";

}

?>