<?php

// Start session
session_start();

// Destroy all session data
session_destroy();

echo "Session destroyed successfully.";

?>