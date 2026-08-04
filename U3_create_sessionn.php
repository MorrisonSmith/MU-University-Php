<?php

// Start session
session_start();

// Create session variables
$_SESSION['username'] = "Tonney";
$_SESSION['course'] = "B.Sc. IT";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Session</title>
</head>
<body>

<h2>Session Created</h2>

<?php

echo "Username: " . $_SESSION['username'] . "<br>";
echo "Course: " . $_SESSION['course'];

?>

</body>
</html>