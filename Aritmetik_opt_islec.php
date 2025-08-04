<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aritmetik operatörler ve işleç önceliği</title>
</head>
<body>
    <?php
// Aritmetik işleçler
// Aritmetik işleçler, sayısal değerler üzerinde matematiksel işlemler yapmak için kullanılır.
// PHP'de kullanılan temel aritmetik işleçler şunlardır:
// + (toplama), - (çıkarma), * (çarpma), / (bölme), % (modül alma) | Modül sayıda kalanını verir
$a = 9;
$b = 4;
$c = 8;

echo "Toplama: " . ($a + $b) . "<br>"; // 12
echo "Çıkarma: " . ($a - $b) . "<br>"; // 6
echo "Çarpma: " . ($a * $b) . "<br>"; // 27
echo "Bölme: " . ($a / $b) . "<br>"; // 3
echo "Modül Alma: " . ($a % $b) . "<br>"; // 0

// İşleç önceliği
// PHP'de işleçlerin önceliği vardır. Öncelik sırası şu şekildedir:
// 1. Parantezler ()
// 2. Üslü işleçler ** (varsa)
// 3. Çarpma ve bölme *, /, %
// 4. Toplama ve çıkarma +, -

// Örnek    


    ?>

</body>
</html>