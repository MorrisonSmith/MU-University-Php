<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$month = "June";

if($month == "June")
{
    echo "Current Month is June";
}
else
{
    echo "Other Month";
}

echo "<br>";

switch($month)
{
    case "June":
        echo "June";
        break;

    default:
        echo "Other Month";
}
?>
</body>
</html>