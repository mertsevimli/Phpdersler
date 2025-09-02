<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizgeler!!</title>
</head>

<body>
    <h1>Dizgeler</h1>
    <?php




    //strtolover // $metin = "Merhaba Dünya!";

    // $metin = "MerhabA Dünya!";
    // echo strtolower($metin); // merhaba dünya!  //* Tüm harfleri küçük harfe çevirir. ***
    // echo "<br>";
    // echo strtoupper($metin); // MERHABA DÜNYA!  //* Tüm harfleri büyük harfe çevirir.***  
    // echo "<br>";
    // echo ucfirst($metin); // Merhaba dünya!  //* İlk harfi büyük yapar. ***
    // echo "<br>";
    // echo ucwords($metin); // Merhaba Dünya!  //* Her kelimenin ilk harfini büyük yapar.
    // echo "<br>";
    // echo strlen($metin); // 15  //* Metnin karakter sayısını verir.
    // echo "<br>";
    // echo str_word_count($metin); // 3  //* Metindeki kelime sayısını verir.
    // echo "<br>";
    // echo strpos($metin, "Dünya"); // 8  //* Metinde "Dünya" kelimesinin başlangıç indeksini verir.
    // echo "<br>";
    // echo str_replace("Dünya", "Evren", $metin); // Merhaba Evren!  //* Metindeki "Dünya" kelimesini "Evren" ile değiştirir.
    // echo "<br>";
    // echo substr($metin, 0, 8); // MerhabA D  //* Metnin ilk 8 karakterini alır. ****
    // echo "<br>";
    // echo substr($metin, -6); // Dünya!  //* Metnin son 6 karakterini alır.
    // echo "<br>";
    // echo str_repeat($metin, 2); // MerhabA Dünya!MerhabA Dünya!  //* Metni belirtilen sayıda tekrarlar.
    // echo "<br>";
    // echo trim("   Merhaba Dünya!   "); // Merhaba Dünya!  //* Metnin başındaki ve sonundaki boşlukları siler.
    // echo "<br>";
    // echo str_shuffle($metin); // !aMrehbDünya  //* Metindeki karakterleri rastgele karıştırır.
    // echo "<br>";
    // echo str_pad($metin, 20, "*", STR_PAD_BOTH); // ***MerhabA Dünya!***  //* Metni belirtilen uzunluğa getirir ve eksik kısımları belirtilen karakterle doldurur.
    // echo "<br>";
    // echo str_split($metin, 3); // Array ( [0] => Mer [1] => hab [2] => a D [3] => ün [4] => ya! )  //* Metni belirtilen uzunlukta parçalara böler ve dizi olarak döner.
    // echo "<br>";
    // echo strrev($metin); // !aynüD abahreM  //* Metni ters çevirir.
    // echo "<br>";
    // echo htmlspecialchars("<h1>Merhaba Dünya!</h1>"); // &lt;h1&gt;Merhaba Dünya!&lt;/h1&gt;  //* HTML özel karakterlerini dönüştürür.
    //*Number Format Fonksiyonu
    // $sayi=1234.56;
    // echo $tr = number_format($sayi,2,",","."); 
    // * İlk parametre sayıdır.
    // * İkinci parametre ondalık basamak sayısıdır.
    // * Üçüncü parametre ondalık ayırıcıdır.
    // * Dördüncü parametre binlik ayırıcıdır.




    // ltrim trim
    // $metin = " -*./ Merhaba Dünya!   ";
    // echo trim($metin," - * . /") ; // Muhtemel olan bu karakterleri baştan ve sondan siler.
    //* Lttrim başından siler.
    //*trim sondan siler.



    //*İmplode Fonksiyonu (birleştirme  )
    // $urunler=array( "araba,kalem,defter,kitap");
    // $ayrac=implode(",", $urunler); //* Dizideki verileri hangi kriterlere göre birleştireceğimizi belirleriz. Aradaki boşluklara göre
    // echo $ayrac; // Araba,Kalem,Defter,Kitap



    //*Explode Fonksiyonu
    // $urunler="toka,kalem,defter,kitap";
    // $bolunmus= explode(",", $urunler); //* Dizideki verileri hangi kriterlere göre böleceğimizi belirleriz. Aradaki boşluklara göre

    // echo $bolunmus[0]. "<br>"; // Toka
    // echo $bolunmus[1]. "<br>"; // Kalem
    // echo $bolunmus[2]. "<br>"; // Defter
    // echo $bolunmus[3]. "<br>"; // Kitap

    ?>

</body>

</html>