<!DOCTYPE html>
<html>
<body>

<form method="post">
Enter Numbers (comma separated):
<input type="text" name="numbers">
<input type="submit" value="Sort">
</form>

<?php

if(isset($_POST['numbers']))
{
    $numbers = explode(",", $_POST['numbers']);

    sort($numbers);

    echo "<h3>Sorted Array</h3>";

    foreach($numbers as $num)
    {
        echo $num."<br>";
    }
}

?>

</body>
</html>