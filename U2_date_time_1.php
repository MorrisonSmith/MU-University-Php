<!DOCTYPE html>
<html>
<head>
    <title>MySQL Date Functions</title>
</head>
<body>

<h2>MySQL Date and Time Functions</h2>

<?php

// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "studentdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query
$sql = "SELECT
        DAYOFWEEK(NOW()) AS dayofweek,
        WEEKDAY(NOW()) AS weekday,
        DAYOFMONTH(NOW()) AS dayofmonth,
        DAYOFYEAR(NOW()) AS dayofyear,
        DAYNAME(NOW()) AS dayname,
        MONTH(NOW()) AS monthnumber,
        MONTHNAME(NOW()) AS monthname,
        WEEK(NOW()) AS weeknumber,
        NOW() AS current_datetime,
        SYSDATE() AS system_datetime,
        CURRENT_TIMESTAMP() AS current_timestamp";

// Execute query
$result = mysqli_query($conn, $sql);

// Check result
if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "DAYOFWEEK(): " . $row['dayofweek'] . "<br>";
    echo "WEEKDAY(): " . $row['weekday'] . "<br>";
    echo "DAYOFMONTH(): " . $row['dayofmonth'] . "<br>";
    echo "DAYOFYEAR(): " . $row['dayofyear'] . "<br>";
    echo "DAYNAME(): " . $row['dayname'] . "<br>";
    echo "MONTH(): " . $row['monthnumber'] . "<br>";
    echo "MONTHNAME(): " . $row['monthname'] . "<br>";
    echo "WEEK(): " . $row['weeknumber'] . "<br>";
    echo "NOW(): " . $row['current_datetime'] . "<br>";
    echo "SYSDATE(): " . $row['system_datetime'] . "<br>";
    echo "CURRENT_TIMESTAMP(): " . $row['current_timestamp'] . "<br>";

} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>

</body>
</html>