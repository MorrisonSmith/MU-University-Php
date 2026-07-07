<!DOCTYPE html>
<html>
<body>

<form method="post">

Number 1:
<input type="number" name="num1"><br><br>

Number 2:
<input type="number" name="num2"><br><br>

<input type="submit" value="Calculate">

</form>

<?php

function calculator($a,$b)
{
    echo "Addition = ".($a+$b)."<br>";
    echo "Subtraction = ".($a-$b)."<br>";
    echo "Multiplication = ".($a*$b)."<br>";

    if($b!=0)
    {
        echo "Division = ".($a/$b)."<br>";
    }
    else
    {
        echo "Division Not Possible";
    }
}

if(isset($_POST['num1']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];

    calculator($a,$b);
}

?>

</body>
</html>
