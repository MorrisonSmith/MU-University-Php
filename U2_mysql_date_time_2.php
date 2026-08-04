<!DOCTYPE html>
<html>
<head>
    <title>MySQL Date Functions 2</title>
</head>
<body>

<h2>MySQL Date and Time Functions</h2>

<?php

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "studentdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query
$sql = "SELECT
        HOUR(NOW()) AS hour_value,
        MINUTE(NOW()) AS minute_value,
        SECOND(NOW()) AS second_value,
        DATE_FORMAT(NOW(), '%d-%m-%Y') AS formatted_date,
        DATE_SUB(NOW(), INTERVAL 7 DAY) AS previous_date,
        DATE_ADD(NOW(), INTERVAL 7 DAY) AS next_date";

// Execute query
$result = mysqli_query($conn, $sql);

// Display result
if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "HOUR(): " . $row['hour_value'] . "<br>";
    echo "MINUTE(): " . $row['minute_value'] . "<br>";
    echo "SECOND(): " . $row['second_value'] . "<br>";
    echo "DATE_FORMAT(): " . $row['formatted_date'] . "<br>";
    echo "DATE_SUB(): " . $row['previous_date'] . "<br>";
    echo "DATE_ADD(): " . $row['next_date'] . "<br>";

} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>

</body>
</html>