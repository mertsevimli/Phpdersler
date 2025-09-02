<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
date_default_timezone_set("Europe/Istanbul");
setlocale(LC_ALL, "tr_TR.UTF-8");

date("Y-m-d H:i:s");
echo "<br>";
echo date("d.m.Y H:i:s");
echo "<br>";
echo 'Saat : ' . date("H:i:s");
echo "<br>";
echo date('d F Y l')."<br>";
echo strftime('&e &B &Y &A &H: &M: &S');
    ?>
</body>
</html>