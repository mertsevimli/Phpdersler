<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04.08.2025 -  Sabit değişkenler</title>
</head>
<body>
    <?php
// Sabit değişkenler
// Sabit değişkenler, değerleri bir kez atandıktan sonra değiştirilemeyen değişkenlerdir.
// Sabit değişkenler genellikle büyük harfle yazılır ve define() fonksiyonu ile tanımlanır.

define("BOM", "elma suyu.", true); // Sabit değişken tanımlama
echo BOM; // Sabit değişkeni ekrana yazdırma
echo "<br>"; // Satır atlama
//echo bom; // Sabit değişkeni büyük-küçük harf duyarsız olarak ekrana yazdırma
echo "<br>"; // Satır atlama


 defined("zurna") or define("zurna", "Zurna Değer", true); // Sabit değişken tanımlama, eğer tanımlı değilse
echo zurna; // Sabit değişkeni ekrana yazdırma

// define("zurna", " deger değiş", true);
echo "<br>";
echo zurna; // Sabit değişkeni ekrana yazdırma, ancak bu satır hata verecektir çünkü sabit değişkenler değiştirilemez
echo "<br>"; // Satır atlama

// Sabit değerler | https://www.udemy.com/course/sifirdan-hizli-ve-kolay-php-ogren-ornek-uygulamalar-php-egitimi/learn/lecture/12229464#overview üzerinden tekrar et

    ?>
</body>
</html>