<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get include</title>
</head>
<body>
    <?php
//*Sayfaya dahil olan dosyaları gösterir
// include, include_once, require, require_once
// include ve require arasındaki fark include hata verirse kodun geri kalanını çalıştırır
// require hata verirse kodun geri kalanını çalıştırmaz 

// include 'veri_turleri.php';
// include_once 'date.php';
// require 'sleep.php';


// $dahiller=get_included_files();
// foreach($dahiller as $dahil):
//     echo $dahil . "<br>";
// endforeach;


//*php version sorgulama
// echo "Çalışan sürüm". phpversion();

//*Yüklü eklentileri gösterir
// $veriler = get_loaded_extensions();

// foreach ($veriler as $veri):
//     echo $veri . "<br>";
// endforeach;

//*Sunucu bilgileri
// echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
// echo $_SERVER['SERVER_NAME'] . "<br>";
// echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
// echo $_SERVER['SERVER_ADMIN'] . "<br>";

// echo $ip = getenv('REMOTE_ADDR');

//list fonksiyonu

$urunler = array("samsung,iphone,xiaomi,huawei,oppo");

list($birinci,$ikinci,$ucuncu) = $urunler;

echo $birinci . "<br>";

    ?>
</body>
</html>