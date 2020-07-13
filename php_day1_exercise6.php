<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<div>
<?php
$characters = array(
"Mickey" => "Mouse",
"Donald"  => "Duck",
"Minnie" =>  "Mouse",
"Daisy" => "Duck"
);
echo "Mickeys last name is " . $characters['Mickey']. "<br />";
echo "Donalds last name is " . $characters['Donald']. "<br />" ;
echo "Minnies last name is " . $characters['Minnie']. "<br />";
echo "Daisys last name is " . $characters['Daisy']. "<br />";
?>
</div>

<div>
<?php
$characters = array(
"Mickey" => array(
    "lastName" => "Mouse"),
"Donald"  => array(
    "lastName" => "Duck"),
"Minnie" => array(
    "lastName" => "Mouse"),
"Daisy" => array(
    "lastName" =>"Duck")
);
echo "Mickeys last name is " . $characters['Mickey']['lastName']. "<br />";
echo "Donalds last name is " . $characters['Donald']['lastName']. "<br />" ;
echo "Minnies last name is " . $characters['Minnie']['lastName']. "<br />";
echo "Daisys last name is " . $characters['Daisy']['lastName']. "<br />";
?>
</div>


</body>
</html>