<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = [1,2,3];
$b = [4,5,6];

$c = array_merge($a,$b);

foreach($c as $n)
{
    echo $n." ";
}
?>
</body>
</html>