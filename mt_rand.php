<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mt_rand </title>
</head>
<body>

<?php

//*Virgülden sonra sayı belirtirsen o miktarda kelimeyi bölüyor

// $satir="yazilim ogreniyorum";
// // $veril=str_split($satir);
// $veri2=str_split($satir,5);
// print_r($veri2); // her harfi ayrı ayrı alır



// echo str_shuffle($satir); // yazının harflerini karıştırır


// mt_rand() -- random sayı üretir

// max min

// echo max(2,3,6,7,9); // ona verilen en büyük değeri gösterir
// echo "<br>";
// echo max (array(2,3,6,7,9)); // ona verilen en büyük değeri gösterir
// echo "<br>";
// echo min(2,3,6,7,9); // ona verilen en küçük değeri gösterir
// echo "<br>";
// echo min (array(2,3,6,7,9)); // ona verilen en küçük değeri gösterir
// echo "<br>";

// floor round ceil
// echo floor(4.3) . "<br>"; // 4 e yuvarlar
// echo floor(9.99) . "<br>";  // 9 a aşağı yuvarlar
// echo floor(-3.14) . "<br>"; // 3.0

// echo "<hr>";

// echo round(3.4) . "<br>"; // Noktadan sonraki rakkam 4 olduğu için 3.0 yapar
// echo round(3.5) . "<br>"; // 3.5 olduğu için 4.0 yapar

// echo round(3.9) . "<br>"; // noktadan sonra 5 varsa bir üstüne yuvarlar

// echo "<hr>";
// echo ceil(4.3) . "<br>"; //  Yukarı yuvarlar 5.0 yapar
// echo ceil(9.99) . "<br>"; // 10.0 yapar yukarı doğru yuvarlar
// echo ceil(-3.14) . "<br>"; // 





// mt_rand() -- random sayı üretir
// echo mt_rand(1, 100); // 1 ile 100 arasında rastgele bir sayı üretir

// mt_srand() -- rastgele sayı üreticisini başlatır
// mt_srand(12345); // 12345 ile başlatır

// mt_getrandmax() -- rastgele sayı üreticisinin maksimum değerini döndürür
// echo mt_getrandmax(); // maksimum değeri gösterir

// echo mt_rand(1, 100) . "<br>"; // 1 ile 100 arasında rastgele bir sayı üretir


?>
    
</body>
</html>