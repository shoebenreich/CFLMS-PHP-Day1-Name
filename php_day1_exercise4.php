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
$name = "Sanja";
for( $i=0; $i<50; $i++)
{
echo $name;
};
?>
</div>
<div>
<?php
$name = "Sanja";
$i=0;
while($i<50)
{
echo $name;
$i ++;
};
?>
</div>

<div>
<?php
$name = "Sanja";
$i=0;
do
{
echo $name;
$i++;
} while( $i < 50 );
?>
</div>

</body>
</html>