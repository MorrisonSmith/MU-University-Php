<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$arr = array(
    "Name"=>"John",
    "Age"=>20,
    "City"=>"Delhi"
);
print_r(array_change_key_case($arr, CASE_LOWER));


$months = array(
"January","February","March","April",
"May","June","July","August",
"September","October","November","December"
);
print_r(array_chunk($months,3));


$colors = array("Red","Blue","Red","Green","Blue","Red");
print_r(array_count_values($colors));


$keys = array("Name","Age","City");
$values = array("John",20,"Delhi");
$result = array_combine($keys,$values);
print_r($result);


$fruits = array("Apple","Banana","Orange");
array_pop($fruits);
print_r($fruits);



$fruits = array("Apple","Banana");
array_push($fruits,"Orange","Mango");
print_r($fruits);


$fruits = array("Banana","Orange");
array_unshift($fruits,"Apple");
print_r($fruits);


$fruits = array("Apple","Banana","Orange");
array_shift($fruits);
print_r($fruits);

?>
</body>
</html>