<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count_fiil_diff</title>
</head>
<body>
    <?php

//count() ile dizinin eleman sayısını bulma
// $a[0] = 1;
// $a[1] = 2;
// $a[2] = 3;
// $a[3] = 4;
// $a[4] = 5;
// $a = count($a);
// echo "Dizinin eleman sayısı: " . $a . "<br>";

//  $a= array_fill(5,4,"elma");
//  print_r($a);
 
// array_diff() ile diziler arasındaki farkı bulma


// Bizim istediğimiz inddeks kadar bizim istediğimiz adım kadar diziyi ekler

// Array diff 

// $kume = array("elma", "armut", "muz", "çilek", "kivi");
// $kume2 = array("elma", "armut", "muz", "Kavun", "kivi");

// $sonuc= array_diff($kume, $kume2);
// $sonuc2= array_diff($kume2, $kume);
// print_r($sonuc);
// echo "<br>";
// print_r($sonuc2);

$kume = array("elma", "armut", "muz", "çilek", "kivi");

echo $son = next($kume) . "<br>";
echo $son2 = prev($kume) . "<br>";
echo $son3 = end($kume) . "<br>";
    ?>
</body>
</html>