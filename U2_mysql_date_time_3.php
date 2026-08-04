<!DOCTYPE html>
<html>
<head>
    <title>MySQL Date Functions 3</title>
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
        CURDATE() AS curdate,
        CURRENT_DATE() AS current_date_value,
        CURTIME() AS curtime,
        CURRENT_TIME() AS current_time_value,
        UNIX_TIMESTAMP() AS unix_timestamp_value,
        FROM_UNIXTIME(UNIX_TIMESTAMP()) AS normal_datetime";

// Execute query
$result = mysqli_query($conn, $sql);

// Display result
if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "CURDATE(): " . $row['curdate'] . "<br>";
    echo "CURRENT_DATE(): " . $row['current_date_value'] . "<br>";
    echo "CURTIME(): " . $row['curtime'] . "<br>";
    echo "CURRENT_TIME(): " . $row['current_time_value'] . "<br>";
    echo "UNIX_TIMESTAMP(): " . $row['unix_timestamp_value'] . "<br>";
    echo "FROM_UNIXTIME(): " . $row['normal_datetime'] . "<br>";

} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>

</body>
</html>