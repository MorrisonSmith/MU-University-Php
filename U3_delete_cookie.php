<?php

// Delete cookie by setting its expiry time in the past
setcookie("username", "", time() - 3600, "/");

echo "Cookie deleted successfully.";

?>