<?php    include_once("harici/harici.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require - Once _ İnclude - İnclude_Once</title>
</head>
<body>
    <?php

    //*include hiç bir koşul gözetmeksizin dosyayı dahil eder.
    //*include_once ise dosyanın daha önce dahil edilip edilmediğini kontrol eder ve eğer dahil edilmişse, tekrar dahil etmez.
    //*parantez içindeki dosya yolunu 1 kere dahil eder.


    //*Arasındaki fark ise include ile require  include warning verir ve script çalışmaya devam eder.
    //*Çalışmayı sürdürür. Require ise dosyayı bulamazsa fatal error verir ve scripti durdurur.

//* İnclude ve Require arasındaki fark nedir? Include herhangi bir dosyayı dahil etmek için kullanılır. Require ise bir dosyayı dahil etmek için kullanılır ve eğer dosya bulunamazsa, bir hata mesajı verir ve scriptin çalışmasını durdurur.
//? İnclude ve Require arasındaki fark, require dosyayı bulamazsa fatal error verir ve scripti durdurur. 
//?İnclude ise warning verir ve script çalışmaya devam eder.

//* İnclude_once ve Require_once arasındaki fark nedir?
//? İnclude_once ve Require_once arasındaki fark, require_once dosyayı bulamazsa fatal error verir ve scripti durdurur. 
//? İnclude_once ise warning verir ve script çalışmaya devam eder.
//? Ayrıca, include_once ve require_once, dosyanın daha önce dahil edilip edilmediğini kontrol eder ve eğer dahil edilmişse, tekrar dahil etmezler. 
//? Bu, aynı dosyanın birden fazla kez dahil edilmesini önler

echo "Toplam : " . $a * $b;; // 15
echo "<br>";





    ?>
</body>
</html>