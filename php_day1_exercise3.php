<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
$day=date("D");
if ($day=="Mon")
echo "Today is Monday!";
elseif ($day=="Tue")
echo "Today is Tuesday!";
elseif ($day=="Wed")
echo "Today is Wednesday!";
elseif ($day=="Thu")
echo "Today is Thursday!";
elseif ($day=="Fri")
echo "Today is Friday!";
elseif ($day=="Sat")
echo "Today is Saturday!";
elseif ($day=="Sun")
echo "Today is Sunday!";
?>
</body>
</html>