<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $str = "Hello World";
    echo "Length = ".strlen($str);



    $str = "Welcome to PHP Programming";
    echo strpos($str,"PHP");



    $str = "Welcome to PHP Programming";
    echo str_word_count($str);


    $str = "PHP";
    echo strrev($str);


    $str = "I like Java";
    echo str_replace("Java","PHP",$str);


    $str = "HELLO WORLD";
    echo strtolower($str);


    $str = "hello world";

echo strtoupper($str);


?>
</body>
</html>