<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else elseif sorgu 2</title>
</head>
<body>

<?php


$a= 5;
$b= 6;

// $sonuc= ($a < $b ? "Evet Büyük" : "Hayır Büyük Değil" . "<br>".  "Eşitler");
// echo $sonuc;

if($a > $b) :
echo"büyük";
    elseif($a === $b) ://kıyaslama koşul ister
        echo "eşitler";
else :
    echo"sorun var";

endif;
?>
    
</body>
</html>