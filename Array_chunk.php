<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array chunk</title>
</head>
<body>
    <?php
//* array_chunk() ile diziyi parçalara ayırma

// $elemanlar = array("elma", "armut", "muz", "çilek" , "kivi", "portakal", "erik", "karpuz","çilek", "kavun", "nar");
// echo "<pre>";
// print_r(array_chunk($elemanlar, 3)); 
// print_r(array_chunk($elemanlar, 3, true)); // true parametresi ile anahtarları korur
// echo "<pre>";


//* array_combine() ile diziyi anahtar-değer çiftlerine dönüştürme
// $elemanlar = array("elma", "armut", "muz", "çilek", "kivi" );
// $elemanlar2 = array("audi", "bmx", "muz", "volvo" ); 
// $olusandizi= array_combine($elemanlar, $elemanlar2);
// echo "<pre>";
// print_r($olusandizi); 
// echo "<pre>";

//* array flip() ile dizinin anahtarlarını ve değerlerini değiştirir
// $elemanlar = array("nesne" => "audi", "bisiklet" => "bmx", "manav" => "muz", "araba" => "volvo" );
// $olusandizi = array_flip($elemanlar);
// echo "<pre>";
// print_r($olusandizi); 
// echo "<pre>";

//* array_key_exists() ile dizide anahtarın varlığını kontrol etme arama işlemi yapma

// $elemanlar = array("nesne" => "audi", "bisiklet" => "bmx", "manav" => "muz", "araba" => "volvo" );
// if (array_key_exists("nesnasae", $elemanlar)) {
//     echo "Nesne dizide var <br>";
// } else {
//     echo "Nesne dizide yok <br>";
// }


//* Array_map  array liste ile  fuction içerisindekileri kaç adetle çarpmak istiyorsan ekler

// function islem($sayi) {
//     return $sayi * 2;
// }
// $elemanlar = array("1", "2", "3", "4", "5");
// echo "<pre>";
// print_r(array_map("islem", $elemanlar)); // her elemanı islem fonksiyonuna gönderir
// echo "<pre>";

//* Array_merge() ile dizileri birleştirme string olarak yazılan var tamamıyla karısık
// $elemanlar = array("model" => "T120", 8, 9 );
// $elemanlar2 = array("zeytin", "peynir" , "model" => "z850", "araba" => "volvo",35 );
// echo "<pre>";
// print_r(array_merge($elemanlar,$elemanlar2)); // yeni diziyi oluşturur
// echo "<pre>";

//* Array_pop() ile dizinin son elemanını çıkarma

// $elemanlar = array("elma", "armut", "muz", "çilek", "kivi" );
// $olusandizi = array_pop($elemanlar); // son elemanı çıkarır
// echo "<pre>";
// print_r($elemanlar); 

//** Son dizide çıkan elemanı ekrana yazdırır */

//* Array SHİFT ilk elemanı çıkartır.

//* Array_shift() ile dizinin ilk elemanını çıkarma
//  $elemanlar = array("elma", "armut", "muz", "çilek", "kivi" );
// $olusandizi = array_shift($elemanlar); // son elemanı çıkarır
// echo "<pre>";
// print_r($elemanlar); 

//* Array unshift() ile dizinin başına eleman ekleme
// $isimler = array("Ahmet", "Mehmet");

// array_unshift($isimler,"olcay", "mert"); // başına eleman ekler
// echo "<pre>";
// print_r($isimler);

//* Array_product ile dizinin çarpımını alma | yazı yazarsan matematiksel işlemi gercekleştiremiyecektir. işlem 0 olarak gösterecektir.
// $elemanlar = array(1, 2, 3, 4, 5);

// echo "Dizinin çarpımı: " . array_product($elemanlar);

//* Array_unique() ile dizideki tekrar eden elemanları kaldırma
$elemanlar = array("elma", "armut", "muz", "çilek", "kivi", "elma", "armut");
echo "<pre>";
print_r(array_unique($elemanlar)); // tekrar eden elemanları kaldırır
echo "<pre>";



    ?>
</body>
</html>