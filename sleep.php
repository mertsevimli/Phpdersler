<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



//*sleep
// date_default_timezone_set('Europe/Istanbul');

// echo date('H:i:s') . "<br>";

// sleep(5);

// echo date('H:i:s') . "<br>";

//isset unset

$a=54;

if(isset($a)):;
echo "a değişkeni tanımlı <br>";

else:
    echo "a değişkeni tanımlı değil <br>";

endif;

unset($a);


if(isset($a)):;
echo "a değişkeni tanımlı <br>";

else:
    echo "a değişkeni tanımlı değil <br>";

endif;









?>
</body>
</html>