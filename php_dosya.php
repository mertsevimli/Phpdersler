<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya İşlemleri</title>
</head>
<body>

<?php
// $path = __DIR__ . "/Özel";

// // Klasör yoksa oluştur
// if (!is_dir($path)) {
//     mkdir($path, 0777, true);
// }

// // Dosya oluştur/yaz
// $file = $path . "/test.txt";
// file_put_contents($file, "Merhaba Mert!");

// echo "Klasör ve dosya hazır: $file";


// touch("Özel/deneme.txt");

// //* Var olan dosyaları okumak için açma yazmak için açma ve tipleri mevcut
// $dosya = fopen("Özel/deneme.txt", "r+"); //*r+ okuma ve yazma

// fclose($dosya);//* Dosyayı kapatır mutlaka dosyayı kapatmak gerekir.Zaman aşımı yaşanabilir.

//*fread  dosya içerisindekileri görüntüler

$dosya = fopen("Özel/deneme.txt", "r"); //*r okuma 
$icerik = fread($dosya,filesize("Özel/deneme.txt"));
echo $icerik;
fclose($dosya);

//*fwrite

?>

</body>
</html>