<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya İşlemleri</title>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
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

// $dosya = fopen("Özel/deneme.txt", "r"); //*r okuma 
// $icerik = fread($dosya,filesize("Özel/deneme.txt"));
// echo $icerik;
// fclose($dosya);

//*fwrite



// $dosya=fopen("Özel/deneme.txt", "r+");
// fwrite($dosya, "Gizem Sevimli");
// fclose($dosya);


//*unlink dosya silme

// $dosya="Özel";
// unlink($dosya)

//*file exists  (bir dosyanın var olup olmadığını kontrol eder) Klasörün olması gerekiyor klasör yoksa hata verir

// touch("Özel/merhaba.txt");
// if(file_exists("Özel/merhaba.txt")):
// echo "dosya var";
// else:
//     echo "dosya yok";
// endif;


//* feof --- fgets feof dosyanın sonuna gelindiğinde true döner fgets ise satır satır okuma yapar

//*While döngüsü ile okuma while döngüsü çok satırlı dosyaları okumak için kullanılır
//*

// $dosya=fopen("Özel/merhaba.txt", "r");
// $okunan = fgets($dosya);
// print_r($okunan);
// fclose($dosya);


// $dosya=fopen("Özel/merhaba.txt", "r");
// while(!feof($dosya)):


//     $okunan = fgets($dosya);
//     print $okunan. "<br>";


// endwhile;
// fclose($dosya);

//*copy

// $mevcut="Özel/merhaba.txt";
// $yeni="Özel/merhaba2.txt";

// if(!copy($mevcut,$yeni)):
//     echo "dosya kopyalandı";
// else:
//     echo "dosya kopyalanamadı";
// endif;



?>

</body>
</html>