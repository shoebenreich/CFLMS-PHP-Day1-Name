<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Advanced</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$fahrenheit = 55;
function FahrenheitToCelsius() {
    global $fahrenheit;
    $celsius = ($fahrenheit - 32) * 5/9;
    
    if ($celsius >= 0 and $celsius <=5)
        echo "The Temperature in Celsius is $celsius. It is very cold.";
    elseif ($celsius >= 6 and $celsius <=10)
        echo "The Temperature in Celsius is $celsius. It is cold.";
    elseif ($celsius >= 11 and $celsius <=15)
        echo "The Temperature in Celsius is $celsius. It is pleasant.";
    elseif ($celsius >= 16 and $celsius <=20)
        echo "The Temperature in Celsius is $celsius. It is warm.";
    elseif ($celsius >= 21)
        echo "The Temperature in Celsius is $celsius. It is hot.";
};
FahrenheitToCelsius();


?>
</body>
</html>